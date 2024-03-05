<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VisaRequirment;
use App\Application;
use App\Destination;
use App\Country;
use App\Package;
use App\Service;

class HomeController extends Controller
{
    public function home()
    {
        $destinations = Destination::get();
        $packages = Package::get();
    	$countries = Country::get();
    	return view('front.home', compact('destinations', 'packages', 'countries'));
    }

    public function about()
    {
    	return view('front.about');
    }

    public function service()
    {
        $services = Service::get();
        return view('front.service', compact('services'));
    }

   

    public function service_detail($id)
    {
        $service = Service::find($id);
        $services = Service::inRandomOrder()->limit(10)->get();
        return view('front.service-detail', compact('service', 'services'));
    }

    public function packages()
    {
        $packageCountry = Package::get();
        $visaRequirments = VisaRequirment::get();
        $packages = Package::get();
        return view('front.packages', compact('packages', 'visaRequirments', 'packageCountry'));
    }

    public function package($id)
    {

        
        $package = Package::find($id);
        $packages = Package::inRandomOrder()->limit(10)->get();
        return view('front.package-detail', compact('package', 'packages'));
    }

    public function country(Request $request)
    {
        error_reporting(0);
        $country = Country::where('name', $request->country) ->first();
        $visaRequirment = VisaRequirment::where('country', $country->id)->first();
        return view('front.visa-requirment', compact('visaRequirment'));
    }

    public function visa()
    {
        $visas = VisaRequirment::get();
    	return view('front.visa', compact('visas'));
    }

    public function visa_detail($id)
    {
        $visa = VisaRequirment::find($id);
        $visas = VisaRequirment::get();
        return view('front.visa-detail', compact('visa', 'visas'));
    }

    public function contact()
    {
    	return view('front.contact');
    }
}
