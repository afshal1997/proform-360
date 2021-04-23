<?php

use App\Models\Homecard;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class HomeCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        HomeCard::insert([
            [
                'icon' => '<i class="fa fa-file-text"></i>',
                'heading' => 'Email Integration',
                'text' => '<p> Email Integration with MailChimp or Constant Contact </p>',
                'created_by' => 1,
                'created_at' => $now,
            ],
            [
                'icon' => '<i class="fa fa-line-chart"></i>',
                'heading' => 'Social Media Marketing',
                'text' => '<p>
                                Social Media Managed in One Location,
                                Make content and push to all sites in one
                                sitting rather than multiple postings.
                                Save time and effort.
                            </p>',
                'created_by' => 1,
                'created_at' => $now,
            ],
            [
                'icon' => '<i class="fa fa-comments-o"></i>',
                'heading' => 'Text Message Posting',
                'text' => '<p>
                                Text Messaging, Send SMS to clients for
                                information and for advertising specials.
                                Ask your clients to review your company
                                and improve online reputation and results.

                            </p>',
                'created_by' => 1,
                'created_at' => $now,
            ],
            [
                'icon' => '<i class="fa fa-file-text-o"></i>',
                'heading' => 'Article & Content',
                'text' => '<p>
                                Article and content feed helping you
                                to create posting content. Develop your own
                                strategy and keep your clients up to date
                                with your business and with their passions.
                            </p>',
                'created_by' => 1,
                'created_at' => $now,
            ],
            [
                'icon' => '<i class="fa fa-television"></i>',
                'heading' => 'Reputation Monitor',
                'text' => '<p>
                                Online review sites and reputation monitored.
                                Receive alerts when a review is posted so you
                                can take immediate action to thank or defend,
                                as you deem necessary.
                            </p>',
                'created_by' => 1,
                'created_at' => $now,
            ],
            [
                'icon' => '<i class="fa fa-calendar"></i>',
                'heading' => 'Content Posting',
                'text' => '<p>
                                Calendaring for up to 30 days of content postings
                                and advertising. Set the content and strategy
                                in advance and let our platform post for you
                                during the upcoming month.
                            </p>',
                'created_by' => 1,
                'created_at' => $now,
            ]

        ]);
    }
}
