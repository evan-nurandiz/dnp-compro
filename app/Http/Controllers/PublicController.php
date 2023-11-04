<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function Work() {
        return view('web.work');
    }

    public function WorkDetail($slug) {
        return view('web.work-detail');
    }
}
