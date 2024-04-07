<?php
namespace App\Repository\site;

use App\Interface\site\CartSiterepositoryinterface;
use App\Models\cartlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartSiterepository implements CartSiterepositoryinterface
{
    public function add_to_cart()
    {

        $cartlist = cartlist::where('product_id',request('product_id'))->get();

        if ($cartlist->count() > 0) {

            return response() -> json(['status' => false ]);
        }


        else {


            $product=Product::findorfail(request('product_id'));
            $product_special_price=$product->special_price;

            if($product_special_price ==Null){

              $price=$product->price;
            }
            else{

              $price=$product->special_price;
            }

            cartlist::create([
                'product_id' => request('product_id'),
                'user_id' => auth()->user()->id,
                'quantity'=>1,
                'price'=>$price,
                "total_price"=>1*$price,
            ]);

            return response() -> json(['status' => true ]);
        }
    }

    public function basket()
    {

             $products = Auth::user()
                ->products_cartlist()
                ->get();

               $cartlists=cartlist::where('user_id',auth()->user()->id)->get();
                 $total=$cartlists->sum('total_price');

            return view('site.cart.basket', compact('products','total'));

    }

    public function delete_from_cart()
    {
        $user_id = auth()->user()->id;
        cartlist::where('user_id', $user_id)
            ->where('product_id', request('product_id'))
            ->delete();
    }

    public function total_cartlists()
    {

        $total_cartlists=cartlist::where('user_id',auth()->user()->id)->count();
        echo json_encode($total_cartlists);
    }


    public function quantity($request){

        $user_id=auth()->user()->id;
        $quantity=$request->quantity;
        $product=cartlist::where('product_id',$request->product_id)->where('user_id',$user_id)->select('price')->first();
        $price=$product->price;
        cartlist::where('product_id',$request->product_id)->where('user_id',$user_id)->update([

           'quantity'=>$request->quantity,

           "total_price"=>$quantity*$price,


        ]);
        return back();
    }

}
