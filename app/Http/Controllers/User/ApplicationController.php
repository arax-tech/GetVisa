<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Application;
use App\User;
use App\Category;
use App\VisaRequirment;
use Auth;
class ApplicationController extends Controller
{
    public function index()
    {
        error_reporting(0);
        $applications = Application::where('user_id', auth::user()->id)->orderBy('id', 'DESC')->get();
        $categories = Category::get();
        $VisaRequirments = VisaRequirment::get();
        return view('user.application.index', compact('applications', 'categories', 'VisaRequirments'));
    }

 

    public function store (Request $request)
    {
        // dd($request->all());

        
        $application = New Application();
        $application->user_id = auth::user()->id;
        $application->name = $request->name;
        $application->passport_no = $request->passport_no;
        $application->passport_expiry_date = $request->passport_expiry_date;
        $application->no_of_old_passport = $request->no_of_old_passport;
        $application->date_of_birth = $request->date_of_birth;
        $application->country = $request->country;
        $application->visa_type = '';
        $arr = explode("-|-", $request->visa_type);
        $application->visa_type = $arr[0];
        $application->price = $arr[1];
        $application->payment_status = 'Unpaid';
        $application->status = 'Pending';
        $application->priority = $request->priority;
        $application->save();

        return redirect()->back()->with('flash_message_success', 'Application Create Successfully');
    }


    public function update (Request $request, $id)
    {
        // dd($request->all());
        $application = Application::find($id);
        $application->name = $request->name;
        $application->passport_no = $request->passport_no;
        $application->passport_expiry_date = $request->passport_expiry_date;
        $application->no_of_old_passport = $request->no_of_old_passport;
        $application->date_of_birth = $request->date_of_birth;
        $application->country = $request->country;
        $application->visa_type = '';
        $arr = explode("-|-", $request->visa_type);
        $application->visa_type = $arr[0];
        $application->price = $arr[1];
        $application->priority = $request->priority;
        $application->save();

        return redirect()->back()->with('flash_message_success', 'Application Update Successfully');
    }

    public function delete($id)
    {
        Application::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Application Delete Successfully');
    }
    
}
