<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Interface\site\wishlistSiterepositoryinterface;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    protected $wishlist;

    public function __construct( wishlistSiterepositoryinterface $wishlist)
    {
               $this->wishlist=$wishlist;
    }


    public function index(){

        return $this->wishlist->wishlist();
    }

    public function store_wishlist(){

        return $this->wishlist->store_wishlist();
    }

    public function delete( Request $request){

        return $this->wishlist->delete($request);
    }


}
