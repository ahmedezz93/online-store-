<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Interface\site\ProductSiterepositoryinterface;
use Illuminate\Http\Request;

class ProductSiteController extends Controller
{
    protected $product_site;

    public function __construct( ProductSiterepositoryinterface $product_site)
    {
               $this->product_site=$product_site;
    }


    public function get_products($slug){

        return $this->product_site->get_products($slug);
    }


    public function product_details($slug){

        return $this->product_site->product_details($slug);
    }


    public function search_results(Request $request){

        return $this->product_site->search_results($request);
    }


}
