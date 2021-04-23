<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Home::create([
            'banner' => 'assets/uploads/home/slider.jpeg',
            'banner_text' => '<h1>
                                    SAAS
                                </h1>
                                <h2>
                                    <strong>Digital Hub</strong> for
                                </h2>
                                <h2>
                                    Small Business
                                </h2>
                                <h2>
                                    <strong>Marketing</strong> &amp;
                                </h2>
                                <h2>
                                    Social <strong>Management</strong>
                                </h2>',
            'section_heading1' => 'Get more done in less time',
            'section_sub_heading1' => 'Great Tools = Happy People',
            'section_paragraph1' => ' <p class="text-muted">
                            Schedule activities based on your sales scripts: calls, meetings, mailing,
                            and quotations. Get all the information you need, directly on the opportunity:
                            website pages viewed, mail received, etc.
                        </p>',
            'section_heading2' => 'Stay connected to your customers',
            'section_sub_heading2' => 'Real-time messaging to enhance collaboration.',
            'section_paragraph2' => '<p class="text-muted">
                            Get a quick overview of what’s going on in your team. see when a
                            colleague logs a call or sends a quote. Share ideas and files
                            in real-time and catch-up on things you missed
                            when you were away.
                        </p>
                        <p class="text-muted">
                            I am text block. Click edit button to change this text.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Ut elit tellus, luctus nec ullamcorper
                            mattis, pulvinar dapibus leo.
                        </p>',
            'section_heading3' => 'Real-time overview',
            'section_paragraph3' => '<p>
                        Easily review your performances &amp; next activities.
                    </p>
                    <p>
                        Know exactly how you perform compares to your monthlytargets.
                        Organize your work based on your scheduled next actions.
                    </p>',
            'section_heading4' => 'Customer Support',
            'section_paragraph4' => '<p>
                        Our team is here to provide you with personalized and outstanding service.
                        We also offer a range of self-learning tools in our support center:
                    </p>',
            'section_image' => 'assets/uploads/home/circle.png',
            'created_by' => 1,
            'created_at' => $now
        ]);
    }
}
