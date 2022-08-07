<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Item;
use App\Models\Wfavourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
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
        $favourites = Favourite::all();
        return view('favourite.index',compact('favourites'));
    }

    public function store($id){
        $item = Item::all()->find($id);
        $favourite = new Favourite();
        $favourite->title = $item->title;
        $favourite->photo = $item->photo;
        $favourite->item_id = $item->id;
        $favourite->user_id = Auth::id();

        $favourite->save();

        return redirect()->back();
    }

    public function destroy($id){
        Favourite::all()->find($id)->delete();
        return redirect()->back()->with('status','deleted youtube favourite is completely.');
    }
}
