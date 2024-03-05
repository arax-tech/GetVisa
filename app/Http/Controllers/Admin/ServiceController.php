<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        error_reporting(0);
        $services = Service::orderBy('id', 'DESC')->get();
        return view('admin.service.index', compact('services'));
    }

 

    public function store (Request $request)
    {
        // dd($request->all());

        
        $service = New Service();
        $service->name = $request->name;
        $service->status = $request->status;
        $service->description = $request->description;
        if ($request->hasFile('image')) 
        {
            $file1 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/service/', $file1, 'my_files');
            $service->image = $file1;
        }
        else
        {
            $service->image = '';
        }
        $service->save();

        return redirect()->back()->with('flash_message_success', 'Service Create Successfully');
    }


    public function update (Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->status = $request->status;
        $service->description = $request->description;
        if ($request->hasFile('image')) 
        {
            $file1 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/service/', $file1, 'my_files');
            $service->image = $file1;
        }
        else
        {
            $service->image = $service->image;
        }
        $service->save();

        return redirect()->back()->with('flash_message_success', 'Service Update Successfully');
    }

    public function delete($id)
    {
        Service::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Service Delete Successfully');
    }
    
}
