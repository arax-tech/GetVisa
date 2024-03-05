<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
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
        $applications = Application::orderBy('id', 'DESC')->get();
        $categories = Category::get();
        $VisaRequirments = VisaRequirment::get();
        return view('admin.application.index', compact('applications', 'categories', 'VisaRequirments'));
    }



    public function update (Request $request, $id)
    {
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
        $application->payment_status = $request->payment_status;
        $application->status = $request->status;
        $application->priority = $request->priority;
        $application->remarks = $request->remarks;
        $application->save();

        $user = User::find($application->user_id);
        

        $details = [
                'application_id' => $application->id,
                'visa_type' => $application->visa_type,
                'category' => $application->category,
                'price' => $application->price,
                'payment_status' => $application->payment_status,
                'status' => $application->status,
                'remarks' => $application->remarks,
            ];
           
        Mail::to($user->email)->send(new \App\Mail\StatusUpdate($details));

        return redirect()->back()->with('flash_message_success', 'Application Update Successfully');
    }

    public function delete($id)
    {
        Application::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Application Delete Successfully');
    }
    
}
