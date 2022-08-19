<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use App\Models\Type;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    public function __construct(){  $this->middleware('auth');  }


    public function index()
        /* search() mean we are using (local scope) you can see in the model "scopeSearch function" */
    {
        $items = Item::search()->with('type','category')->latest('id')->paginate('8')->withQueryString();
        return view('item.index',compact('items',));
    }


    public function create(){   return view('item.create'); }


    public function store(StoreItemRequest $request)
    {
        $item = new Item();
        $item->title = $request->title;
        $item->type_id = $request->type;
        if($request->hasFile('photo')){
            $fileNewName = uniqid()."_anchor_image.".$request->file('photo')->extension();
            $request->file('photo')->storeAs('public/youtube',$fileNewName);
            $item->photo = $fileNewName;
        }
        $item->level = $request->level;
        $item->save();

        return redirect()->back()->with('status','anchor youtube item is created.');
    }


    public function show(Item $item){   return view('item.show',compact('item'));   }


    public function edit(Item $item){   return view('item.edit',compact('item'));   }


    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->title = $request->title;
        $item->slug = Str::slug($request->title);
        $item->type_id = $request->type;
        $item->level = $request->level;
        if($request->hasFile('photo')){
            $fileNewName = uniqid()."_anchor_image.".$request->file('photo')->extension();
            $request->file('photo')->storeAs('public/youtube',$fileNewName);
            $item->photo = $fileNewName;
        }
        $item->update();

        return redirect()->route("item.index")->with('status','anchor youtube item is created.');
    }


    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back()->with('status','deleted youtube item is completely.');
    }
}
