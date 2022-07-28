<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebRequest;
use App\Http\Requests\UpdateWebRequest;
use App\Models\Web;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Web::when(request('keyword'),function($q){
            $keyword = request('keyword');
            $q->orWhere("title","like","%$keyword%");
        })->with('type')->latest('id')->paginate('7')->withQueryString();
        return view('webItem.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webItem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWebRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebRequest $request)
    {
        $web = new Web();
        $web->title = $request->title;
        $web->type_id = $request->type;
        $fileNewName = uniqid()."_anchor_image.".$request->file('photo')->extension();
        $request->file('photo')->storeAs('public/webs',$fileNewName);
        $web->photo = $fileNewName;
        $web->save();

        return redirect()->back()->with('status','anchor web item is created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function show(Web $web)
    {
        return view('webItem.show',compact('web'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit(Web $web)
    {
        return view('webItem.edit',compact('web'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebRequest  $request
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebRequest $request, Web $web)
    {
        $web->title = $request->title;
        $web->type_id = $request->type;
        $fileNewName = uniqid()."_anchor_image.".$request->file('photo')->extension();
        $request->file('photo')->storeAs('public/webs',$fileNewName);
        $web->photo = $fileNewName;
        $web->update();

        return redirect()->route("web.index")->with('status','anchor web item is created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy(Web $web)
    {
        $web->delete();

        return redirect()->back()->with('status','deleted web item is completely.');
    }
}
