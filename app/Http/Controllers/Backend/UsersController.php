<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function view()
    {
        if (Auth::user()->userType=='admin')
        {
            $allUserss= User::all();
            return view('backend.users.users_view', compact('allUserss'));
        }else{
            return redirect()->route('dashboard');
        }

    }
    public function add()
    {if (Auth::user()->userType=='admin')
    {
        return view ('backend.users.users_register');
    }else{
        return redirect()->route('dashboard');
    }

    }

     public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> ['required','string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'mobile'=> ['required', 'string', 'min:11','max:14','unique:users'],
            'userType'=> ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6'
        ]);
        $users= new User();
        $users->name  = $request->name;
        $users->email = $request->email;
        $users->mobile = $request->mobile;
        $users->address = $request->address;
        $users->gender = $request->gender;
        $users->userType = $request->userType;
        $users->password = bcrypt($request->password);
       $users->save();
       return redirect()->route('users_view')->with('success','user create successfully');
    }

public function edit($id)
{
$editUsers = User::find($id);
return view('backend.users.user_edit',compact('editUsers'));
}
public function update(Request $request,$id)
{
    $this->validate($request,[
        'name'=> ['required','string', 'max:50'],

        'userType'=> ['required'],
    ]);
    $update = User::find($id);
    $update->name  = $request->name;
    $update->email = $request->email;
    $update->mobile = $request->mobile;
    $update->address = $request->address;
    $update->gender = $request->gender;
    $update->userType = $request->userType;
    $update->save();
    return redirect()->route('users_view')->with('success',' update successfully');
}

public function delete($id)
{
    $user = User::find($id);
    if (file_exists('public/upload/user_images/' . $user->image) AND ! empty($user->image))
    {
        unlink('public/upload/user_images/'. $user->image);
    }
    $user->delete();
    return redirect()->route('users_view')->with('success',' delete successfully');
}





    public function userStatus($id, $status)
    {
$users =User::find($id);
$users->status= $status;
$users->save();
return response()->json(['message'=>'success']);
    }
}
