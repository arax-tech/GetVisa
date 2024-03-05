<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Category;
use App\Country;

class CategoryController extends Controller
{
    public function index()
    {
        error_reporting(0);
        $categories = Category::get();
        $countries = Country::get();
        return view('admin.category.index', compact('categories', 'countries'));
    }

 

    public function store (Request $request)
    {
      

        $category = New Category();
        $category->name = $request->name;
        // $category->country_id = $request->country_id;
        $category->price = $request->price;
        $category->save();

        return redirect()->back()->with('flash_message_success', 'Category Created Successfully');
    }


    public function update (Request $request, $id)
    {
        // dd($request->all());

        $category = Category::find($id);
        // $category->country_id = $request->country_id;
        $category->name = $request->name;
        $category->price = $request->price;
        $category->save();

        return redirect()->back()->with('flash_message_success', 'Category Updated Successfully');
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Category Delete Successfully');
    }
    
}
