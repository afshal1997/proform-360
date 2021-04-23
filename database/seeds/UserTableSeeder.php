<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'role_id' => 1,
                'first_name' => 'Nabeel',
                'last_name' => 'Baig',
                'email' => 'mathswithnabeel@gmail.com',
                'password' => Hash::make('Abcd1234'),
                'image' => 'assets/uploads/user/profile.jpg',
                'phone' => '923333906233',
                'date_of_birth' => '1995-11-02',
                'facebook' => 'https://www.facebook.com/mnbprofile',
                'instagram' => 'https://www.instagram.com/nabeelbaigmnb/',
                'twitter' => 'https://www.instagram.com/nabeelbaigmnb/',
                'about' => "I'm a Software Engineer from Sir Syed University of Engineering and Technology. Currently Working as a Assistant Manager in Technado Pvt Limited.",
                'address' => 'Gulistan-e-Jauhar',
                'created_by' => 1,
            ],
            [
                'role_id' => 2,
                'first_name' => 'Demo',
                'last_name' => 'Admin',
                'email' => 'admin@demo.com',
                'password' => Hash::make('Abcd1234'),
                'image' => 'assets/uploads/user/profile.jpg',
                'phone' => '03331234567',
                'date_of_birth' => '1995-11-02',
                'facebook' => 'https://www.facebook.com',
                'instagram' => 'https://www.instagram.com',
                'twitter' => 'https://www.instagram.com',
                'about' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                'address' => 'Your Page Address',
                'created_by' => 1,
            ]
        ]);
    }
}
