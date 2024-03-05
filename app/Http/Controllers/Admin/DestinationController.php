<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        error_reporting(0);
        $destinations = Destination::orderBy('id', 'DESC')->get();
        return view('admin.destination.index', compact('destinations'));
    }

 

    public function store (Request $request)
    {
        // dd($request->all());

        
        $destination = New Destination();
        $destination->name = $request->name;
        $destination->status = $request->status;
        $destination->description = $request->description;
        if ($request->hasFile('image')) 
        {
            $file1 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/destination/', $file1, 'my_files');
            $destination->image = $file1;
        }
        else
        {
            $destination->image = '';
        }
        $destination->save();

        return redirect()->back()->with('flash_message_success', 'Destination Create Successfully');
    }


    public function update (Request $request, $id)
    {
        $destination = Destination::find($id);
        $destination->name = $request->name;
        $destination->status = $request->status;
        $destination->description = $request->description;
        if ($request->hasFile('image')) 
        {
            $file1 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/destination/', $file1, 'my_files');
            $destination->image = $file1;
        }
        else
        {
            $destination->image = $destination->image;
        }
        $destination->save();

        return redirect()->back()->with('flash_message_success', 'Destination Update Successfully');
    }

    public function delete($id)
    {
        Destination::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Destination Delete Successfully');
    }
    
}
