<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::when(request('keyword'),function($q){
            $keyword = request('keyword');
            $q->orWhere("name","like","%$keyword%")->
                orWhere("email","like","%$keyword%");
        })->latest('id')->paginate('7')->withQueryString();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::all()->find($id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all()->find($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->name || $request->photo){
            $request->validate([
                'name' => 'required|max:15',
                'photo' => 'mimes:png,jpg,jpeg,svg'
            ]);
            $user = User::all()->find($id);
            $user->name = $request->name;
            if($request->hasFile('photo')){
                $newFileName = uniqid()."_profile_logo.".$request->file('photo')->extension();
                $request->file('photo')->storeAs('public/profiles',$newFileName);
                $user->logo = $newFileName;
            }
            $user->update();

            return redirect()->back()->with('status','updated profile is completely.');
        }

        if($request->userName || $request->userPhoto || $request->role || $request->email){
            $request->validate([
                'userName' => 'required|max:15',
                'email'    => 'required|email',
                'userPhoto' => 'mimes:png,jpg,jpeg,svg',
                'role'      => 'required|in:0,1,2',
            ]);
            $user = User::all()->find($id);
            $user->name = $request->userName;
            $user->email= $request->email;
            $user->role = $request->role;
            if($request->hasFile('userPhoto')){
                $newFileName = uniqid()."_profile_logo.".$request->file('userPhoto')->extension();
                $request->file('userPhoto')->storeAs('public/profiles',$newFileName);
                $user->logo = $newFileName;
            }
            $user->update();

            return redirect()->route('user.index')->with('status',$user->name.'is updated.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::all()->find($id);
        $user->delete();
        return redirect()->back()->with('status',$user->name.'is deleted.');
    }
}
