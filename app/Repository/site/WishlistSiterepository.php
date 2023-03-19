<?php
namespace App\Repository\site;

use App\Interface\site\wishlistSiterepositoryinterface;
use App\Models\Product;
use App\Models\products_sections;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class WishlistSiterepository implements wishlistSiterepositoryinterface
{
    public function store_wishlist()
    {
       $wishlist =Wishlist::where('product_id',request('productId'))->get();
    if($wishlist->count()>0){

        return response() -> json(['status' => true , 'wished' => false]);  // added before we can use enumeration here

    }
   else{

          Wishlist::create([

          'product_id'=>request('productId'),
            'user_id'=>auth()->user()->id,
          ]);
          return response() -> json(['status' => true , 'wished' => true]);

   }

    }

    public function wishlist()
    {
        $user_id=auth()->user()->id;

         $product_ids=wishlist::where('user_id',$user_id)->pluck('product_id');
          $products=Product::wherein('id',$product_ids)->latest()->get();
         return view('site.products.wishlists',compact('products'));
    }


    public function delete($request)
    {

        $user_id=auth()->user()->id;

     Wishlist::where('user_id',$user_id)->where('product_id',request('productId'))->delete();

    }
}
