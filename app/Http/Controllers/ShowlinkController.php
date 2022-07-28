<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowlinkController extends Controller
{
    public function index($link){
        return view('showLink.index',compact('link'));
    }
}
