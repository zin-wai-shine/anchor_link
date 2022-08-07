<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request, $id){

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
    }
}
