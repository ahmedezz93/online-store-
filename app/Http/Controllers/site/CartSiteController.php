<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Interface\site\CartSiterepositoryinterface;
use Illuminate\Http\Request;

class CartSiteController extends Controller
{
       protected $cart;

    public function __construct( CartSiterepositoryinterface $cart)
    {
               $this->cart=$cart;
    }


    public function add_to_cart(){

        return $this->cart->add_to_cart();
    }


    public function basket(){

        return $this->cart->basket();
    }


    public function delete_from_cart(){

        return $this->cart->delete_from_cart();
    }

    public function total_cartlists(){

        return $this->cart->total_cartlists();
    }


    public function quantity(Request $request){

        return $this->cart->quantity($request);
    }




}
