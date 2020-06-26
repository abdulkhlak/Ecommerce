<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function view()
    {
        $id= Auth::user()->id;
        $user= User::find($id);
        return view('backend.profile.profile_view',compact('user'));
    }
    public function edit()
    {
        $id= Auth::user()->id;
        $editProfile= User::find($id);
        return view('backend.profile.profile_edit',compact('editProfile'));
    }
    public function update(Request $request)
{
    $update = User::find(Auth:: user()->id);
    $update->name  = $request->name;
    $update->email = $request->email;
    $update->mobile = $request->mobile;
    $update->address = $request->address;
    $update->gender = $request->gender;
    if ($request->file('avatar'))
    {
        $file= $request->file('avatar');
        @unlink(public_path('upload/user_images/'.$update->avatar));
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/user_images'),$filename);
        $update['avatar']=$filename;
    }
    $update->save();
    return redirect()->route('profile_view')->with('success',' update profile successfully');
}
public function password()
{
    return view('backend.profile.profile_password');
}
public function passwordUpdate( Request $request)
{
    if (Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password]))
    {
    $user= user::find(Auth::user()->id);
    $user->password = bcrypt($request->new_password);
    $user->save();
    return redirect()->route('profile_view')->with('success','your password has been change');
    }else{
       return back()->with('error','sorry your current password does not match');
    }
}
}

