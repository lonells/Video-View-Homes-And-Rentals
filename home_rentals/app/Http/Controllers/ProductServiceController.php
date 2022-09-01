<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;
use File;
use DB;
use App\Models\Productservice;
use App\Models\Category;
use App\Models\Country;
use App\Models\Regions;
use App\Models\City;
use App\Models\InputDevices;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class ProductServiceController extends Controller
{
    function index()
    {
        $product = Productservice::where(['status'=>1])->orderByRaw("RAND()")->get();
        $oneproduct = Productservice::where(['status'=>1])->orderBy('created_at', 'DESC')->first();
        return view('productservices', compact('oneproduct','product'));
    }

    public function uploadproduct()
    {
        $Country = Country::get();
        $Regions = Regions::get();
        $City = City::get();
        $Category =Category::where(['is_deleted'=>0,'is_active'=>1])->get();
        return view('uploadservice_product')->with(['countries'=>$Country, 'regions'=>$Regions, 'cities'=>$City])->with(['categories'=>$Category]);
    }

    public function uploadproduct_service(Request $request)
    {
        $validator = Validator::make($request->all(), [  
            
        ]);
        //dd($request->all());
        $data['country'] = $request->country;
        $data['region'] = $request->region;
        $data['city'] = $request->city;
        $data['category'] = $request->category;
        $data['product'] = $request->product;
        $data['service'] = $request->service;
        $data['about'] = $request->about;
        $data['price'] = $request->price;
        $data['quantity_available'] = $request->quantity_available;
        $data['company'] = $request->company;
        $data['website'] = $request->website;
        $data['product_size'] = $request->product_size;
        $data['live_stream_price'] = $request->live_stream_price;
        $data['pick_ship'] = $request->pick_ship;
        if($request->hasFile('servicephoto')) {
            /*$allowedMimeTypes = array(
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/svg',
                'image/svg+xml',
                'image/bmp'
            );
            $image_file = $request->file('servicephoto');
            $mimetype = $image_file->getClientMimeType();
            if(!in_array($mimetype, $allowedMimeTypes)){
                return redirect()->route('uploadproduct')->with('error', 'Please select a valid image type');
                exit;       
            }
            else{
                $imageName = time().rand(1, 100).'.'.$image_file->getClientOriginalExtension();
                $imagedestinationPath = public_path('/productimages');
                $image_file->move($imagedestinationPath, $imageName);
            } */
            $image_file = $request->file('servicephoto');
            $imageName = time().rand(1, 100).'.'.$image_file->getClientOriginalExtension();
            $imagedestinationPath = public_path('/productimages');
            $image_file->move($imagedestinationPath, $imageName);       
            $data['servicephoto'] = $imageName;  
        }
        if($request->hasFile('servicevideo')) { 
            $video_file = $request->file('servicevideo');
            $videoName = time().rand(1, 100).'.'.$video_file->getClientOriginalExtension();
            $videodestinationPath = public_path('/productvideos');
            $video_file->move($videodestinationPath, $videoName);    
            $data['servicevideo'] = $videoName;    
        }
        $Productservice = Productservice::create($data);
        if($Productservice){
            return redirect()->route('productservices')->with('success', 'Product added successfully.');
        }
        else{
            return back()->with('error',trans('message.networkErr'));
        }
    }

    function inputDevices()
    {
        $InputDevices =InputDevices::where('status', 1)->get();
        return view('inputdevices')->with(['devices'=>$InputDevices]);
    }
    public function getRegions_ajax(Request $request){
        $countryId = $request->countryId;
        $Regions = Regions::where('country_id', $countryId)->get();
        $countData = $Regions->count();
        return view('ajaxregions')->with(['countData'=>$countData, 'regions'=>$Regions]);
    }
    public function getCity_ajax(Request $request){
        $regionId = $request->regionId;
        $Cities = City::where('region_id', $regionId)->get();
        $countData = $Cities->count();
        return view('ajaxcity')->with(['countData'=>$countData, 'cities'=>$Cities]);
    }
}