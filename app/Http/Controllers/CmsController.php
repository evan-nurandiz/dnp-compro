<?php

namespace App\Http\Controllers;

use App\Handlers\CmsHandler;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    protected $cmsHandlers;
    
    public function __construct(CmsHandler $cmsHandlers)
    {
        $this->cmsHandlers = $cmsHandlers;
    }

    public function Contact() {
        try {
            $content = $this->cmsHandlers->getContentBySection('contact');
            $content['content'] = json_decode($content['content']);

            return view('backoffice.contact-cms', [
                'content' => $content
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with(
                'status','fail',
            )->with(
                'message','fail load data cause'.$e->getMessage()
            );
        }
    }

    public function UpdateContact(Request $request) {
        $request->validate([
            'email' => 'required|max:50',
            'behance_link' => 'required',
            'facebook_link' => 'required|max:50',
            'instagram_link' => 'required',
            'phonenumber_1' => 'required',
            'phonenumber_2' => 'required',
        ]);

        $data = $request->only([
            'email',
            'behance_link',
            'facebook_link',
            'instagram_link',
            'phonenumber_1',
            'phonenumber_2'
        ]);

        try {
            $this->cmsHandlers->updateContentBySection($data, 'contact');

            return redirect()->back()
            ->with(
                'status','success',
            )->with(
                'message','success update contact'
            );
        } catch (Exception $e) {
            return redirect()->back()
            ->with(
                'status','fail',
            )->with(
                'message','fail update contact' .$e->getMessage()
            );
        }
    }
}
