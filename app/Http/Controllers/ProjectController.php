<?php

namespace App\Http\Controllers;

use App\Handlers\CrudHandler;
use App\Helpers\GeneralHelpers;
use App\Helpers\UploadHelpers;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected $crudHandler;
    protected $mainTable;
    protected $uploadHelpers;
    protected $generalHelpers;
    protected $mainTablePk;

    public function __construct(CrudHandler $crudHandler, UploadHelpers $uploadHelpers, GeneralHelpers $generalHelpers)
    {
        $this->crudHandler = $crudHandler;
        $this->mainTable = 'projects';
        $this->mainTablePk = 'project_id';
        $this->uploadHelpers = $uploadHelpers;
        $this->generalHelpers = $generalHelpers;
    }

    public function Project() {
        $projects = $this->crudHandler->get($this->mainTable);
        return view('backoffice.project-cms', [
            'projects' => $projects
        ]);
    }

    public function ProjectCreate() {
        return view('backoffice.project-cms-create');
    }

    public function ProjectStore(Request $request) {
        $request->validate([
            'project_title' => 'required|max:50',
            'project_thumbnail_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'project_category' => 'required|max:50',
            'project_body' => 'required',
            'project_content_image_input' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only([
            'project_title',
            'project_category',
            'project_body'
        ]);

        if ($request->hasFile('project_thumbnail_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'project_thumbnail_input');
            $data['project_thumbnail'] = $filename;
        }

        if ($request->hasFile('project_content_image_input')) {
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'project_content_image_input');
            $data['project_content_image'] = $filename;
        }

        $data['project_slug'] = $this->generalHelpers->GenerateSlug($data['project_title']);

        try {
            $this->crudHandler->create($this->mainTable, $data);
            return redirect()->route('admin-cms-project-list')->with(
                'status','success',
            )->with(
                'message','success create project'
            );
        } catch (Exception $e) {
            return $e->getMessage();
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail create project'.$e->getMessage()
            );
        }

    }

    public function ProjectEdit($id) {
        $project = $this->crudHandler->getByOneCondition($this->mainTable, 'project_id', $id);
        return view('backoffice.project-cms-edit', [
            'project' => $project
        ]);
    }

    public function ProjectUpdate(Request $request, $id) {
        $request->validate([
            'project_title' => 'required|max:50',
            'project_thumbnail_input' => 'file|mimes:jpeg,png,jpg|max:2048',
            'project_category' => 'required|max:50',
            'project_body' => 'required',
            'project_content_image_input' => 'file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only([
            'project_title',
            'project_thumbnail',
            'project_category',
            'project_body',
            'project_content_image'
        ]);

        if ($request->hasFile('project_thumbnail_input')) {
            $this->uploadHelpers->deleteSingleImage($data['project_thumbnail']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'project_thumbnail_input');
            $data['project_thumbnail'] = $filename;
        }

        if ($request->hasFile('project_content_image_input')) {
            $this->uploadHelpers->deleteSingleImage($data['project_content_image']);
            $filename = $this->uploadHelpers->uploadSingleImage($request, 'project_content_image_input');
            $data['project_content_image'] = $filename;
        }

        $data['project_slug'] = $this->generalHelpers->GenerateSlug($data['project_title']);

        try {
            $this->crudHandler->update($this->mainTable,$this->mainTablePk,$id, $data);
            return redirect()->back()->with(
                'status','success',
            )->with(
                'message','success update project'
            );
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail update project'.$e->getMessage()
            );
        }

        return $request;
    }

    public function ProjectDelete($id) {
        $project = $this->crudHandler->getByOneCondition($this->mainTable, 'project_id', $id);
            try {
                $this->crudHandler->delete($this->mainTable, $this->mainTablePk, $id);
                $this->uploadHelpers->deleteMultipleImage(array(
                    $project->project_thumbnail,$project->project_content_image,
                ));
                return redirect()->back()->with(
                    'status','success',
                )->with(
                    'message','success delete project'
                );
            } catch (Exception $e) {
                return redirect()->back()->with(
                    'status','fail',
                )->with(
                    'message','fail update project'.$e
                );
            }
    }
}
