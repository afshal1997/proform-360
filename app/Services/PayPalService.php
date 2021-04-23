<?php /** @noinspection ForgottenDebugOutputInspection */

namespace App\Services;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

class PayPalService
{
    private $client;

    final public function __construct()
    {
        $environment = ucfirst(
            strtolower(
                config('services.paypal.environment')
            )
        );
        $clientId = config(
            'services.paypal.' . strtolower($environment) . '.client_id'
        );
        $clientSecret = config(
            'services.paypal.' . strtolower($environment) . '.client_secret'
        );

        $environmentClass = '\\PayPalCheckoutSdk\\Core\\' . $environment . 'Environment';
        $this->client = new PayPalHttpClient(new $environmentClass($clientId, $clientSecret));
    }

    final public function createTransaction(Order $order): RedirectResponse
    {
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => str_pad($order->id, 10, 0, STR_PAD_LEFT),
                "amount" => [
                    "value" => $order->total_amount,
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('cancel.payment', $order->id),
                "return_url" => route('success.payment'),
            ]
        ];

        $response = $this->client->execute($request);

        return redirect($response->result->links[1]->href);
    }

    final public function confirmTransaction(string $orderId): RedirectResponse
    {
        $request = new OrdersCaptureRequest($orderId);
        $request->prefer('return=representation');

        $this->client->execute($request);

        Cart::destroy();

        return redirect()->route('home');
    }
}
