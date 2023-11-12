<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'project_title' => 'Cocomas terrace',
                'project_thumbnail' => 'work_thumbnail_example_1.png',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Food & Beverage',
                'project_body' => 'Cocomas Terrace is a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'cocomas-terrace',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'project_title' => 'Hardaya',
                'project_thumbnail' => 'work_thumbnail_example_2.png',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Hotel',
                'project_body' => 'Hardaya is a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'Hardaya',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'project_title' => 'Past Twelve',
                'project_thumbnail' => 'work_thumbnail_example_3.png',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Food & Beverage',
                'project_body' => 'Past Twelve is a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'past-twelve',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'project_title' => 'THIS IS US',
                'project_thumbnail' => 'work_thumbnail_example_4.png',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Entertaiment',
                'project_body' => 'Past Twelveis a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'this-is-us',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'project_title' => 'TOGETHER',
                'project_thumbnail' => 'work_thumbnail_example_5.png',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Music',
                'project_body' => 'TOGETHER a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'together',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'project_title' => 'hope&love community',
                'project_thumbnail' => 'work_thumbnail_example_6.png',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Community',
                'project_body' => 'hope&love community a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'hope-&-love-community',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'project_title' => 'RUST',
                'project_thumbnail' => 'work_thumbnail_example_7.png',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Game',
                'project_body' => 'hope&love community a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'rust',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ];

        Project::insert($data);
    }
}
