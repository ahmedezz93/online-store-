<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Product;
use App\Models\Category;
use App\Models\Section;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

public function home(){

     $data['product_special_price']=product::where('special_price' ,'!=', Null)->latest()->take(4)->get();
     $data['product_trending']=Product::latest()->take(24)->orderBy('id', 'DESC')->get();

     $data['sections']=Section::latest()->take(3)->get();
     $data['products']=Product::get();
    $data['ads_first_zone']=Ad::where('zone','1')->latest()->take(3)->get();
    $data['ads_second_zone']=Ad::where('zone','2')->latest()->take(2)->get();

     $data['sliders']=Slider::all();
      $data['categories']=Category::with(['sections'])->with(['products'])->get();

    return view('site.home',$data);
}




}
