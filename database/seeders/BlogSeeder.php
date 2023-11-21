<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class BlogSeeder extends Seeder
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
                'blog_title' => 'Stay fit & Stay Productive',
                'blog_thumbnail' => 'blog_example_1.png',
                'blog_body' => '<p>We’ve made it quick and convenient for you to manage your blog from anywhere.&nbsp;</p><p>In this blog post we’ll share the ways you can post to your Wix Blog.</p><p>&nbsp;</p><figure class="image"><img style="aspect-ratio:586/436;" src="http://127.0.0.1:8000/storage/images/Cover Art Dafa LR copy_1700295625.png" width="586" height="436"></figure><p>&nbsp;</p><h2>Blogging from Your Wix Blog Dashboard</h2><p>On the dashboard, you have everything you need to manage your blog in one place. You can create new posts, set categories and more. To head to your Dashboard, open the Wix Editor and click on Blog &gt; Posts.</p><p><br>&nbsp;</p><h2>Blogging from Your Published Site</h2><p>Did you know that you can blog right from your published website? After you publish your site, go to your website’s URL and login with your Wix account. There you can write and edit posts, manage comments, pin posts and more! Just click on the 3 dot icon ( ⠇) to see all the things you can do.</p><p>&nbsp;</p><p><a href="https://devinpartners.wixsite.com/devingodfrey/blog/hashtags/workfromhome">#workfromhome</a> &nbsp;<a href="https://devinpartners.wixsite.com/devingodfrey/blog/hashtags/wfh">#wfh</a></p>',
                'blog_created_by' => 'devingodfrey',
                'read_time' => '1 min read',
                'blog_slug' => 'Stay-fit-&-Stay-Productive',
                'blog_like' => 0,
                'blog_view' => 0,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'blog_title' => 'Stay fit & Stay Productive 2',
                'blog_thumbnail' => 'blog_example_1.png',
                'blog_body' => '<p>We’ve made it quick and convenient for you to manage your blog from anywhere.&nbsp;</p><p>In this blog post we’ll share the ways you can post to your Wix Blog.</p><p>&nbsp;</p><figure class="image"><img style="aspect-ratio:586/436;" src="http://127.0.0.1:8000/storage/images/Cover Art Dafa LR copy_1700295625.png" width="586" height="436"></figure><p>&nbsp;</p><h2>Blogging from Your Wix Blog Dashboard</h2><p>On the dashboard, you have everything you need to manage your blog in one place. You can create new posts, set categories and more. To head to your Dashboard, open the Wix Editor and click on Blog &gt; Posts.</p><p><br>&nbsp;</p><h2>Blogging from Your Published Site</h2><p>Did you know that you can blog right from your published website? After you publish your site, go to your website’s URL and login with your Wix account. There you can write and edit posts, manage comments, pin posts and more! Just click on the 3 dot icon ( ⠇) to see all the things you can do.</p><p>&nbsp;</p><p><a href="https://devinpartners.wixsite.com/devingodfrey/blog/hashtags/workfromhome">#workfromhome</a> &nbsp;<a href="https://devinpartners.wixsite.com/devingodfrey/blog/hashtags/wfh">#wfh</a></p>',
                'blog_created_by' => 'devingodfrey',
                'read_time' => '1 min read',
                'blog_slug' => 'Stay-fit-&-Stay-Productive',
                'blog_like' => 0,
                'blog_view' => 0,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'blog_title' => 'Stay fit & Stay Productive 3',
                'blog_thumbnail' => 'blog_example_1.png',
                'blog_body' => '<p>We’ve made it quick and convenient for you to manage your blog from anywhere.&nbsp;</p><p>In this blog post we’ll share the ways you can post to your Wix Blog.</p><p>&nbsp;</p><figure class="image"><img style="aspect-ratio:586/436;" src="http://127.0.0.1:8000/storage/images/Cover Art Dafa LR copy_1700295625.png" width="586" height="436"></figure><p>&nbsp;</p><h2>Blogging from Your Wix Blog Dashboard</h2><p>On the dashboard, you have everything you need to manage your blog in one place. You can create new posts, set categories and more. To head to your Dashboard, open the Wix Editor and click on Blog &gt; Posts.</p><p><br>&nbsp;</p><h2>Blogging from Your Published Site</h2><p>Did you know that you can blog right from your published website? After you publish your site, go to your website’s URL and login with your Wix account. There you can write and edit posts, manage comments, pin posts and more! Just click on the 3 dot icon ( ⠇) to see all the things you can do.</p><p>&nbsp;</p><p><a href="https://devinpartners.wixsite.com/devingodfrey/blog/hashtags/workfromhome">#workfromhome</a> &nbsp;<a href="https://devinpartners.wixsite.com/devingodfrey/blog/hashtags/wfh">#wfh</a></p>',
                'blog_created_by' => 'devingodfrey',
                'read_time' => '1 min read',
                'blog_slug' => 'Stay-fit-&-Stay-Productive',
                'blog_like' => 0,
                'blog_view' => 0,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ];

        Blog::insert($data);
    }
}
