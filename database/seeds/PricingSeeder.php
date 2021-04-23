<?php

use App\Models\Pricing;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Pricing::insert([
            [
                'title' => 'BASE FEATURES',
                'package' => 'Free',
                'pricing' => 0,
                'setup' => 'No Setup Fee',
                'description' => '<ul>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Engaging Social Media Posts</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Analytics</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Reputation Monitor</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Review Alerts</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Email Integration</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Sweepstakes</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Deals</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Branded Content</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Ordering</li>
                                </ul>',
                'created_by' => 1,
                'created_at' => $now,
            ],
            [
                'title' => 'BASE FEATURES',
                'package' => 'Plus',
                'pricing' => 139,
                'setup' => 'Setup Fee',
                'description' => '<ul>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Analytics</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Sweepstakes</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Deals</li>
                                </ul>',
                'created_by' => 1,
                'created_at' => $now,
            ],
            [
                'title' => 'BASE FEATURES',
                'package' => 'Premium',
                'pricing' => 149,
                'setup' => 'Setup Fee : $149',
                'description' => '<ul>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Engaging Social Media Posts</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Analytics</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Reputation Monitor</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Review Alerts</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Email Integration</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Sweepstakes</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Deals</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Branded Content</li>
                                    <li><i class="fa fa-arrow-circle-o-right"></i> Social Ordering</li>
                                </ul>',
                'created_by' => 1,
                'created_at' => $now,
            ]
        ]);
    }
}
