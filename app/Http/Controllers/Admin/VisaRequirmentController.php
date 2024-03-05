<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\VisaRequirment;
use App\Country;

class VisaRequirmentController extends Controller
{
    public function index()
    {
        error_reporting(0);
        $visas = VisaRequirment::orderBy('id', 'DESC')->get();
        return view('admin.visa-requirment.index', compact('visas'));
    }

    public function create()
    {
        $countries = Country::get();
        return view('admin.visa-requirment.create', compact('countries'));
    }

 

    public function store (Request $request)
    {
        // dd($request->all());
        // error_reporting(0);
        
        $visa = New VisaRequirment();
        $visa->country = $request->country;
        $visa->capital = $request->capital;
        $visa->currency = $request->currency;
        $visa->embassy_address = $request->embassy_address;
        $visa->email = $request->email;
        $visa->telephone = $request->telephone;
        $visa->fax = $request->fax;
        $visa->website_link = $request->website_link;
        $visa->tourist_visa = $request->tourist_visa;
        $visa->business_visa = $request->business_visa;
        $visa->process_timeline = $request->process_timeline;
        $visa->status = $request->status;
        

        if ($request->hasFile('visa_form')) 
        {
            $file1 = $request->visa_form->getClientOriginalName();
            $request->visa_form->storeAs('/admin/visa-requirment/', $file1, 'my_files');
            $visa->visa_form = $file1;
        }
        else
        {
            $visa->visa_form = '';
        }

        if ($request->hasFile('image')) 
        {
            $file2 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/visa-requirment/', $file2, 'my_files');
            $visa->image = $file2;
        }
        else
        {
            $visa->image = '';
        }


        $visa->save();

        return redirect('admin/visa-requirment')->with('flash_message_success', 'Visa Requirment Create Successfully');
    }

    public function edit($id)
    {
        $countries = Country::get();
        $visa = VisaRequirment::find($id);
        return view('admin.visa-requirment.edit', compact('countries', 'visa'));
    }

    public function update (Request $request, $id)
    {
        // dd($request->all());
        // error_reporting(0);
        
        $visa = VisaRequirment::find($id);
        $visa->country = $request->country;
        $visa->capital = $request->capital;
        $visa->currency = $request->currency;
        $visa->embassy_address = $request->embassy_address;
        $visa->email = $request->email;
        $visa->telephone = $request->telephone;
        $visa->fax = $request->fax;
        $visa->website_link = $request->website_link;
        $visa->tourist_visa = $request->tourist_visa;
        $visa->business_visa = $request->business_visa;
        $visa->process_timeline = $request->process_timeline;
        $visa->status = $request->status;
        

        if ($request->hasFile('visa_form')) 
        {
            $file1 = $request->visa_form->getClientOriginalName();
            $request->visa_form->storeAs('/admin/visa-requirment/', $file1, 'my_files');
            $visa->visa_form = $file1;
        }
        else
        {
            $visa->visa_form = $visa->visa_form;
        }

        if ($request->hasFile('image')) 
        {
            $file2 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/visa-requirment/', $file2, 'my_files');
            $visa->image = $file2;
        }
        else
        {
            $visa->image = $visa->image;
        }


        $visa->save();

        return redirect('admin/visa-requirment')->with('flash_message_success', 'Visa Requirment Update Successfully');
    }

    public function delete($id)
    {
        VisaRequirment::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Visa Requirment Delete Successfully');
    }
    
}
