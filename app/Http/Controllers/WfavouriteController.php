<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Item;
use App\Models\Web;
use App\Models\Wfavourite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WfavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param array $middleware
     */
    public function setMiddleware(array $middleware): void
    {
        $this->middleware = $middleware;
    }

    public function index(){
        $favourites = Wfavourite::all();
        return view('wFavourite.index',compact('favourites'));
    }

    public function store($id){
        $item = Web::all()->find($id);
        $favourite = new Wfavourite();
        $favourite->title = $item->title;
        $favourite->photo = $item->photo;
        $favourite->item_id = $item->id;
        $favourite->user_id = Auth::id();

        $favourite->save();
        return redirect()->back();
    }

    public function destroy($id){
        Wfavourite::all()->find($id)->delete();
        return redirect()->back()->with('status','deleted web favourite is completely.');
    }
}
