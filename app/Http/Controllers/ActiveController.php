<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActiveRequest;
use App\Http\Requests\UpdateActiveRequest;
use App\Models\Active;

class ActiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actives = Active::when(request('keyword'),function($q){
            $keyword = request('keyword');
            $q->orWhere("email","like","%$keyword%")
                ->orWhere("name","like","%$keyword%");
        })->
        latest('id')->paginate('8')->withQueryString();
        return view('active.index', compact('actives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('active.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActiveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActiveRequest $request)
    {
        $actives = new Active();
        $actives->name = $request->name;
        $actives->email = $request->email;
        $actives->save();

        return redirect()->back()->with('status', 'add client email and name is completely.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function show(Active $active)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function edit(Active $active)
    {
        return view('active.edit',compact('active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActiveRequest  $request
     * @param  \App\Models\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActiveRequest $request, Active $active)
    {
        $active->name = $request->name;
        $active->email = $request->email;
        $active->update();

        return redirect()->route("active.index")->with('status', 'updated client email and name is completely.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function destroy(Active $active)
    {
        $active->delete();
        return redirect()->back()->with('status','deleted client is completely.');
    }
}
