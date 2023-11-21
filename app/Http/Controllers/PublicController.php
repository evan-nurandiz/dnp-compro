<?php

namespace App\Http\Controllers;

use App\Handlers\CmsHandler;
use App\Handlers\CrudHandler;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $homeContent = $this->cmsHandler->getContentBySection('homeContent');
        
        return view('web.welcome', [
            'contact' => json_decode($contact['content']),
            'blogs' => $blogs,
            'homeContent' => json_decode($homeContent['content']),
        ]);
    }

    public function Work(Request $request) {
        $projects = $this->crudHandler->getPaginateData('projects', 12);
        $contact = $this->cmsHandler->getContentBySection('contact');

        if ($request->ajax()) {
            $view = view('template.work-template', compact('projects'))->render();
            return response()->json([
                'html' => $view,
                'projects' => $projects
            ]);
        }

        return view('web.work', [
            'current_page' => $projects->currentPage(),
            'total_page' => $projects->lastPage(),
            'projects' => $projects,
            'contact' => json_decode($contact['content']),
        ]);
    }

    public function WorkDetail($slug) {
        $project = $this->crudHandler->getByOneCondition('projects', 'project_slug', $slug); 
        $contact = $this->cmsHandler->getContentBySection('contact');
        return view('web.work-detail', [
            'project' => $project,
            'contact' => json_decode($contact['content']),
        ]);
    }

    public function Journal(Request $request) {
        if ($request->has('keyword')) {
            $blogs = $this->crudHandler->getPaginateDataWithSearch('blogs', 'blog_title',$request->get('keyword'), 6);
        } else {
            $blogs = $this->crudHandler->getPaginateData('blogs', 6);
        }
        $contact = $this->cmsHandler->getContentBySection('contact');
        return view('web.blog', [
            'blogs' => $blogs,
            'current_page' => $blogs->currentPage(),
            'total_page' => $blogs->lastPage(),
            'contact' => json_decode($contact['content']),
        ]);
    }

    public function JournalDetail($slug) {
        $blog = $this->crudHandler->getByOneCondition('blogs','blog_slug', $slug);
        //update view blogs
        $this->crudHandler->updateOneColumn('blogs', 'blog_id', $blog->blog_id, 'blog_view', $blog->blog_view + 1);
        $contact = $this->cmsHandler->getContentBySection('contact');
        return view('web.blog-detail', [
            'blog' => $blog,
            'contact' => json_decode($contact['content']),
        ]);
    }
}
