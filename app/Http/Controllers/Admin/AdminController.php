<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\VisaRequirment;
use App\Application;
use App\Destination;
use App\Service;
use App\Package;
use App\User;
use Auth;
class AdminController extends Controller
{
    public function dashboard()
    {
        $destination = Destination::count();
        $service = Service::count();
        $visaRequirment = VisaRequirment::count();
        $application = Application::count();
        $package = Application::count();
        $user = User::where('role', 'User')->count();
    	return view('admin.dashboard', compact('destination', 'service', 'visaRequirment', 'application', 'package', 'user'));
    }

    public function profile(Request $request)
    {
    	if ($request->isMethod('POST'))
    	{

            // dd($request->all());
    		$id = Auth::User()->id;

    		$user = User::find($id);
            $user->name = $request->name;
    		$user->email = $request->email;

            


            if (!empty($request->password))
            {
                $user->password = Hash::make($request->password);
            }

     


            if ($request->hasFile('profile')) 
            {
                $file1 = $request->profile->getClientOriginalName();
                $request->profile->storeAs('/admin/profile/', $file1, 'my_files');
                $user->image = $file1;
            }
            else
            {
                $user->image = $user->image;
            }


    		
    		$user->save();
    		return redirect()->back()->with('flash_message_success', 'Profile Update Successfully');

    	}
    	return view('admin.profile');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login')->with('flash_message_success', 'Logout Successfully...');
    }
}
