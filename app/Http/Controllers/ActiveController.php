<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActiveRequest;
use App\Http\Requests\UpdateActiveRequest;
use App\Models\Active;

class ActiveController extends Controller
{
    public function __construct(){  $this->middleware('auth');  }


    public function index()
        /* search() mean we are using (local scope) you can see in the model "scopeSearch function" */
    {
        $actives = Active::search()->latest('id')->paginate('8')->withQueryString();
        return view('active.index', compact('actives'));
    }


    public function create(){   return view('active.create');   }

    public function store(StoreActiveRequest $request)
    {
        $actives = new Active();
        $actives->name = $request->name;
        $actives->email = $request->email;
        $actives->save();

        return redirect()->back()->with('status', 'add client email and name is completely.');
    }


    public function show(Active $active){}


    public function edit(Active $active){   return view('active.edit',compact('active'));   }


    public function update(UpdateActiveRequest $request, Active $active)
    {
        $active->name = $request->name;
        $active->email = $request->email;
        $active->update();

        return redirect()->route("active.index")->with('status', 'updated client email and name is completely.');
    }


    public function destroy(Active $active)
    {
        $active->delete();
        return redirect()->back()->with('status','deleted client is completely.');
    }
}
