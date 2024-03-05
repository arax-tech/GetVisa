<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->isMethod("POST"))
    	{
    		// dd($request->all());
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => "Admin"]))
            {
                return redirect('/admin/dashboard');
            }
            else if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => "User"]))
            {
                return redirect('/user/dashboard');
            }

            else
            {
                return redirect()->back()->with('flash_message_error', 'Invalid Email OR Password, Please try Again...');
            }    		
    	}

        

    	return view('login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post'))
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
            return redirect('/login')->with('flash_message_success','Registration Successful');
        }
        return view('register');
    }  

    
}
