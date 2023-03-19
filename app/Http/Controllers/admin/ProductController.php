<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPriceRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductSaveImages;
use App\Http\Requests\ProductStockRequest;
use App\Http\Requests\StockProductRequest;
use App\Interface\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $products;

    public function __construct( ProductRepositoryInterface $products)
    {
               $this->products=$products;
    }


    public function index(){

        return $this->products->index();
    }


    public function create(){

        return $this->products->create();
    }


    public function store(ProductRequest $request){
        $request->validated();
        return $this->products->store($request);

    }

    public function get_price($id){
        return $this->products->get_price($id);

    }


    public function store_price(ProductPriceRequest $request){
        $request->validated();

        return $this->products->store_price($request);

    }


    public function get_stock($id){
        return $this->products->get_stock($id);

    }


    public function store_stock(ProductStockRequest $request){
        $request->validated();
        return $this->products->store_stock($request);

    }



    public function edit($id){

        return $this->products->edit($id);
    }

    public function update(Request $request){

        return $this->products->update($request);

    }

    public function destroy($id){

        return $this->products->destroy($id);
    }


    public function add_image($id){

        return $this->products->add_image($id);
    }


    public function image_in_folder(Request $request){

        return $this->products->image_in_folder($request);
    }

    public function save_image(ProductSaveImages $request){
        $request->validated();

        return $this->products->save_image($request);
    }

}
