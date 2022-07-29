<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowlinkController extends Controller
{
    public function web($link){
        return view('showLink.web',compact('link'));
    }

    public function youtube($link){
        return view('showLink.youtube',compact('link'));
    }
}
