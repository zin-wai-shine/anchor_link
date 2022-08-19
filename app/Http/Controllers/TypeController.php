<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    public function __construct(){$this->middleware('auth');}

    public function index()
        /* search() mean we are using (local scope) you can see in the model "scopeSearch function" */
    {
        $types = Type::search()->with('category')->latest('id')->paginate('7')->withQueryString();
        return view('typeof.index',compact('types'));
    }


    public function create(){return view('typeof.create');}

    public function store(StoreTypeRequest $request)
    {

        $type = new Type();
        $type->title = ucfirst($request->title);
        $type->slug = Str::slug($request->title);
        $type->category_id = $request->category;
        $type->save();

        return redirect()->back()->with('status','typeof is created.');
    }

    public function show(Type $type){}

    public function edit(Type $type){return view('typeof.edit',compact('type'));}

    public function update(UpdateTypeRequest $request, Type $type)
    {
        $type->title = ucfirst($request->title);
        $type->slug = Str::slug($request->title);
        $type->category_id = $request->category;
        $type->update();
        return redirect()->route("type.index")->with('status','updated typeof is completely.');
    }


    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->back()->with('status','deleted typeof is completely.');
    }
}
