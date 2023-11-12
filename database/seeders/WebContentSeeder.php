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

        $homeContent = [
            'main_title' => "A Multidisciplinary Creative <br/> Consulting Stop Agency <br/> dedicated to make your brand",
            "main_title_moving_text" => array("matter", "meaningful", "well known", "soulful", "captivating"),
            "work_example_1_thumbnail" => "work_example_1.png",
            "work_example_1_title" => "Identity",
            "work_example_1_description" => "Project of recognition",
            "work_example_2_thumbnail" => "work_example_2.png",
            "work_example_2_title" => "One",
            "work_example_2_description" => "Arts x Politics",
            "work_example_3_thumbnail" => "work_example_landscape_1.png",
            "work_example_3_title" => "Cocomas Terrace",
            "work_example_3_description" => "Food & Beverages",
            "work_example_4_thumbnail" => "work_example_3.png",
            "work_example_4_title" => "Identity",
            "work_example_4_description" => "Project of recognition",
        ];

        $data = [
            [
                'section' => 'contact',
                'content' => json_encode($contact),
                'created_at' => Date::now()
            ],
            [
                'section' => 'homeContent',
                'content' => json_encode($homeContent),
                'created_at' => Date::now()
            ]
        ];

        WebContent::insert($data);
    }
}
