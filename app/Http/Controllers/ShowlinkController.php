<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Item;
use App\Models\Type;
use App\Models\Web;
use App\Models\Wfavourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowlinkController extends Controller
{
    public function __construct(){  $this->middleware('auth');  }

    public function web($slug){
        $favourites = Wfavourite::all();
        $auth = Auth::id();
        $webs = Web::all();
        $link = Type::all()->where('slug',$slug)->firstOrFail()->id;
        return view('showLink.web',compact('link','favourites', 'auth', 'webs'));
    }

    public function youtube($slug){
        $favourites = Favourite::all();
        $auth = Auth::id();
        $items = Item::all();
        $link = Type::where('slug',$slug)->firstOrFail()->id;
        return view('showLink.youtube',compact('link','favourites', 'auth', 'items'));
    }
}
