<?php

namespace App\Http\Controllers;

use App\Handlers\CmsHandler;
use App\Handlers\CrudHandler;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{

    protected $crudHandler;
    protected $cmsHandler;

    public function __construct(CrudHandler $crudHandler, CmsHandler $cmsHandler)
    {
        $this->cmsHandler = $cmsHandler;
        $this->crudHandler = $crudHandler;
    }

    public function Home() {
        $contact = $this->cmsHandler->getContentBySection('contact');
        $blogs = $this->crudHandler->getLatestData('blogs', 3);
        
        return view('web.welcome', [
            'contact' => json_decode($contact['content']),
            'blogs' => $blogs
        ]);
    }

    public function Work() {
        $projects = $this->crudHandler->getPaginateData('projects', 12);
        $contact = $this->cmsHandler->getContentBySection('contact');
        $contact['content'] = json_decode($contact['content']);
        return view('web.work', [
            'projects' => $projects,
            'contact' => $contact
        ]);
    }

    public function WorkDetail($slug) {
        $project = $this->crudHandler->getByOneCondition('projects', 'project_slug', $slug); 
        $contact = $this->cmsHandler->getContentBySection('contact');
        $contact['content'] = json_decode($contact['content']);
        return view('web.work-detail', [
            'project' => $project,
            'contact' => $contact
        ]);
    }

    public function Journal() {
        $blogs = $this->crudHandler->getPaginateData('blogs', 6);
        $contact = $this->cmsHandler->getContentBySection('contact');
        return view('web.blog', [
            'blogs' => $blogs,
            'contact' => $contact
        ]);
    }

    public function JournalDetail($slug) {
        $blog = $this->crudHandler->getByOneCondition('blogs','blog_slug', $slug);
        $contact = $this->cmsHandler->getContentBySection('contact');
        return view('web.blog-detail', [
            'blog' => $blog,
            'contact' => $contact
        ]);
    }
}
