<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Category;
use App\Models\Product;
use App\Models\Productservice;
use Session;
use DB;
use Auth;

class ProductController extends Controller
{
    //
    function index()
    {
        /*$product=Product::where(['is_deleted'=>0,'is_active'=>1])->orderBy('created_at', 'DESC')->paginate(15);
        $category=Category::where(['is_deleted'=>0,'is_active'=>1])->get();
        return view('product',compact('product','category'));*/
        //$city = City::get();
        //$category = Category::where(['is_deleted'=>0,'is_active'=>1])->get();
        $product = Productservice::where(['status'=>1])->orderByRaw("RAND()")->paginate(15);
        $oneproduct = Productservice::where(['status'=>1])->orderBy('created_at', 'DESC')->first();
        return view('product', compact('oneproduct','product'));
    }

    function product_detail($id)
    {
        $product=Product::find($id);
        $relatedproducts=Product::where(['cat_name'=>$product->cat_name,'is_deleted'=>0,'is_active'=>1])->get(); 
        
        return view('product_detail',compact('product','relatedproducts'));
    }

    // Category Filter 
    function category($category)
    {
        
        $product=Product::where(['cat_name'=>$category,'is_deleted'=>0,'is_active'=>1])->orderBy('created_at', 'DESC')->paginate(15);
        $category=Category::where(['is_deleted'=>0,'is_active'=>1])->get();

        return view('product',compact('product','category'));
    }
    // Category Filter 

    // State 
    function statesget($id)
    {   
        $data=DB::table('region')->where('country_id',$id)->get();
        return view('states',compact('data'));
    }
    // State 

     // City 
     function cityget($id)
     {   
         $data=DB::table('city')->where('region_id',$id)->get();
         return view('city',compact('data'));
     }

     function cityproducts($id)
     {   
        $product=Product::where(['city_id'=>$id,'is_deleted'=>0,'is_active'=>1])->orderBy('created_at', 'DESC')->paginate(15);
        $category=Category::where(['is_deleted'=>0,'is_active'=>1])->get();
         return view('cityproduct',compact('product','category'));
     }
     // City 


}
