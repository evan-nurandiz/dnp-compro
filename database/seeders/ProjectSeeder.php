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
                'project_thumbnail' => 'project_dnp_example.jpeg',
                'project_content_image' => 'project_dmp_content_logo.jpeg',
                'project_category' => 'Food & Beverage',
                'project_body' => 'Cocomas Terrace is a sub-brand from Cocomas group. A grab and go coconut heavy health bar that focus on coconut product. They are now open in Senayan City and Plaza Indonesia. Our scope of work to re-brand their main visual identity. After intensive sessions of discussion with the owner, we came up with fun and playful Branding.',
                'project_slug' => 'cocomas-terrace',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ];

        Project::insert($data);
    }
}
