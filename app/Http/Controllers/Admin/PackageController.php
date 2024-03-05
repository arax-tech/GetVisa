<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{
    public function index()
    {
        error_reporting(0);
        $packages = Package::orderBy('id', 'DESC')->get();
        return view('admin.package.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.package.create');
    }

    public function store (Request $request)
    {
        // dd($request->all());

        
        $package = New Package();
        $package->package_name = $request->package_name;
        $package->country = $request->country;
        $package->city = $request->city;
        $package->total_night = $request->total_night;
        $package->total_day = $request->total_day;
        $package->price = $request->price;
        $package->discount_price = $request->discount_price;
        $package->package_category = $request->package_category;
        $package->package_type = $request->package_type;

        $newamenities = implode(',', $request->amenities);
        $package->amenities = $newamenities;

        $package->package_description = $request->package_description;
        $package->package_inclusion = $request->package_inclusion;
        $package->package_exclusions = $request->package_exclusions;
        $package->status = $request->status;

        if ($request->hasFile('image')) 
        {
            $file1 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/package/', $file1, 'my_files');
            $package->image = $file1;
        }
        else
        {
            $package->image = '';
        }
        $package->save();

        return redirect('/admin/package')->with('flash_message_success', 'Package Create Successfully');
    }

    public function edit($id)
    {
        $package = Package::find($id);
        return view('admin.package.update', compact('package'));
    }
    public function update (Request $request, $id)
    {
        $package = Package::find($id);
        $package->package_name = $request->package_name;
        $package->country = $request->country;
        $package->city = $request->city;
        $package->total_night = $request->total_night;
        $package->total_day = $request->total_day;
        $package->price = $request->price;
        $package->discount_price = $request->discount_price;
        $package->package_category = $request->package_category;
        $package->package_type = $request->package_type;

        $newamenities = implode(',', $request->amenities);
        $package->amenities = $newamenities;

        $package->package_description = $request->package_description;
        $package->package_inclusion = $request->package_inclusion;
        $package->package_exclusions = $request->package_exclusions;
        $package->status = $request->status;

        if ($request->hasFile('image')) 
        {
            $file1 = time().'.'.$request->image->extension();
            $request->image->storeAs('/admin/package/', $file1, 'my_files');
            $package->image = $file1;
        }
        else
        {
            $package->image = $package->image;
        }
        $package->save();

        return redirect('/admin/package')->with('flash_message_success', 'Package Update Successfully');
    }

    public function delete($id)
    {
        Package::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Package Delete Successfully');
    }
    
}
