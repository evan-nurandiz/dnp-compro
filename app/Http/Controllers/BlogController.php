<?php

namespace App\Http\Controllers;

use App\Handlers\CrudHandler;
use App\Helpers\GeneralHelpers;
use App\Helpers\UploadHelpers;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    protected $crudHandler;
    protected $mainTable;
    protected $uploadHelpers;
    protected $generalHelpers;
    protected $mainTablePk;

    public function __construct(CrudHandler $crudHandler, UploadHelpers $uploadHelpers, GeneralHelpers $generalHelpers)
    {
        $this->crudHandler = $crudHandler;
        $this->mainTable = 'blogs';
        $this->mainTablePk = 'blog_id';
        $this->uploadHelpers = $uploadHelpers;
        $this->generalHelpers = $generalHelpers;
    }

    public function Blog() {
        $blogs = $this->crudHandler->getPaginateData($this->mainTable, 4);
        return view('backoffice.blog-cms', [
            'blogs' => $blogs,
            'current_page' => $blogs->currentPage(),
            'total_page' => $blogs->lastPage(),
        ]);
    }

    public function BlogCreate() {
        return view('backoffice.blog-cms-create');
    }

    public function BlogStore(Request $request) {
        $request->validate([
            'blog_title' => 'required|max:50',
            'blog_thumbnail_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'blog_body' => 'required',
        ]);

        $data = $request->only([
            'blog_title',
            'blog_body'
        ]);

        if ($request->hasFile('blog_thumbnail_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'blog_thumbnail_input');
            $data['blog_thumbnail'] = $filename;
        }

        Str::macro('readDuration', function(...$text) {
            $totalWords = str_word_count(implode(" ", $text));
            $minutesToRead = round($totalWords / 200);
        
            return (int)max(1, $minutesToRead);
        });

        $data['read_time'] = Str::readDuration($data['blog_body']). ' min read';
        $data['blog_created_by'] = 'devingodfrey';
        $data['blog_slug'] = $this->generalHelpers->GenerateSlug($data['blog_title']);

        try {
            $this->crudHandler->create($this->mainTable, $data);
            return redirect()->route('admin-cms-blog-list')->with(
                'status','success',
            )->with(
                'message','success create blog'
            );
        } catch (Exception $e) {
            return $e->getMessage();
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail create blog'.$e->getMessage()
            );
        }

    }

    public function BlogEdit($id) {
        $blog = $this->crudHandler->getByOneCondition($this->mainTable, $this->mainTablePk, $id);
        return view('backoffice.blog-cms-edit', [
            'blog' => $blog
        ]);
    }

    public function BlogUpdate(Request $request, $id) {
        $request->validate([
            'blog_title' => 'required|max:50',
            'blog_thumbnail' => 'required',
            'blog_thumbnail_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'blog_body' => 'required',
        ]);

        $data = $request->only([
            'blog_title',
            'blog_body',
            'blog_thumbnail'
        ]);

        if ($request->hasFile('blog_thumbnail_input')) {
            $this->uploadHelpers->deleteSingleImage($data['blog_thumbnail']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'blog_thumbnail_input');
            $data['blog_thumbnail'] = $filename;
        }

        Str::macro('readDuration', function(...$text) {
            $totalWords = str_word_count(implode(" ", $text));
            $minutesToRead = round($totalWords / 200);
        
            return (int)max(1, $minutesToRead);
        });

        $data['read_time'] = Str::readDuration($data['blog_body']). ' min read';
        $data['blog_created_by'] = 'devingodfrey';
        $data['blog_slug'] = $this->generalHelpers->GenerateSlug($data['blog_title']);

        try {
            $this->crudHandler->update($this->mainTable,$this->mainTablePk,$id, $data);
            return redirect()->route('admin-cms-blog-list')->with(
                'status','success',
            )->with(
                'message','success update blog'
            );
        } catch (Exception $e) {
            return $e->getMessage();
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail update blog'.$e->getMessage()
            );
        }

    }

    public function BlogDelete($id) {
        $blog = $this->crudHandler->getByOneCondition($this->mainTable, $this->mainTablePk, $id);
        try {
            $this->crudHandler->delete($this->mainTable, $this->mainTablePk, $id);
            $this->uploadHelpers->deleteSingleImage($blog->blog_thumbnail);
            return redirect()->back()->with(
                'status','success',
            )->with(
                'message','success delete blog'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail delete blog'.$e
            );
        }
    }
}
