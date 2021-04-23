<?php

namespace App\Http\ViewComposers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\View\View;

class CartViewComposer
{
    final public function compose(View $view): void
    {
//        dd(Cart::content());
        $view->with('cartContents', Cart::content());
    }
}
