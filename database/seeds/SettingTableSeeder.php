<?php

use Illuminate\Database\Seeder;
use App\Models\Settings;
use Carbon\Carbon;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Settings::create([
            'title' => 'Proform 360',
            'headline' => 'Open Hours: Mon-Fri 09:00-18:00',
            'from_email' => 'info@proform360.com',
            'email' => 'info@proform360.com',
            'phone' => '070-8860-4678',
            'whatsapp' => '021-411-3416',
            'address' => 'Mon-Fri 08:00am - 6:00pm
112W 34th St,',
            'weight_class' => 'Gram',
            'dimension_class' => 'Centimeter',
            'logo' => 'assets/uploads/setting/654736388.png',
            'favico' => 'assets/uploads/setting/902576203.png',
            'facebook' => 'https://www.facebook.com',
            'instagram' => 'https://www.instagram.com',
            'twitter' => 'https://www.instagram.com',
            'pinterest' => 'https://www.instagram.com',
            'linkedin' => 'https://www.instagram.com',
            'created_by' => 1,
            'created_at' => $now
        ]);
    }
}
