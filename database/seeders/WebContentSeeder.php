<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\WebContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class WebContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = [
            "email" => "info@devinpartners.com",
            "phonenumber_1" => "+62817172626",
            "phonenumber_2" => "+628817172626",
            "instagram_link" => "https://www.instagram.com/devingodfreystudio/",
            "facebook_link" => "https://www.instagram.com/devingodfreystudio/",
            "behance_link" => "https://www.instagram.com/devingodfreystudio/"
        ];

        $data = [
            [
                'section' => 'contact',
                'content' => json_encode($contact),
                'created_at' => Date::now()
            ]
        ];

        WebContent::insert($data);
    }
}
