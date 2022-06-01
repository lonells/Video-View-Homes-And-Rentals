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
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class StreamController extends Controller
{
    public function uploadproduct()
    {
        $City = City::get();
        $Category =Category::where(['is_deleted'=>0,'is_active'=>1])->get();
        return view('uploadservice_product')->with(['cities'=>$City])->with(['categories'=>$Category]);
    }

    public function uploadproduct_service(Request $request)
    {
        $validator = Validator::make($request->all(), [  
            
        ]);
        //dd($request->all());
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
            $allowedMimeTypes = array(
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
            }          
        }
        $data['servicephoto'] = $imageName;
        if($request->hasFile('servicevideo')) {
            $allowedMimeTypes = array(
                'video/x-flv',
                'video/mp4',
                'video/webm',
                'video/3gpp',
                'video/quicktime',
                'video/x-msvideo',
                'video/x-ms-wmv',
                'video/x-m4v'
            );
            $video_file = $request->file('servicevideo');
            $mimetype = $video_file->getClientMimeType();
            if(!in_array($mimetype, $allowedMimeTypes)){
                return redirect()->route('uploadproduct')->with('error', 'Please select a valid video type');
                exit;       
            }
            else{
                $videoName = time().rand(1, 100).'.'.$video_file->getClientOriginalExtension();
                $videodestinationPath = public_path('/productvideos');
                $video_file->move($videodestinationPath, $videoName);
            }          
        }
        $data['servicevideo'] = $videoName;
        $Productservice = Productservice::create($data);
        if($Productservice){
            return redirect()->route('products')->with('success', 'Product added successfully.');
        }
        else{
            return back()->with('error',trans('message.networkErr'));
        }
    }
}