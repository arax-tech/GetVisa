<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        error_reporting(0);
        $users = User::where('role', 'User')->orderBy('id', 'DESC')->get();
        return view('admin.user.index', compact('users'));
    }

 

    public function store (Request $request)
    {
        // dd($request->all());

        /*Check Email*/
        $user_count = User::where('email',$request->email)->count();
        if ($user_count>0)
        {
            return redirect()->back()->with('flash_message_error','Email is Already Taken Please Use Another Email...');
        }

        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'User';
        $user->save();

        return redirect()->back()->with('flash_message_success', 'User Create Successfully');
    }


    public function update (Request $request, $id)
    {
        // dd($request->all());

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password)
        {
            $user->password = Hash::make($request->password);
        }
        else
        {
            $user->password = $user->password;
        }


        $user->save();

        return redirect()->back()->with('flash_message_success', 'User Update Successfully');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'User Delete Successfully');
    }
    
}
