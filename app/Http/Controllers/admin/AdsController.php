<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdsRequest;
use App\Interface\AdsRepositoryinterface;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    protected $ads;

    public function __construct( AdsRepositoryinterface $ads)
    {
               $this->ads=$ads;
    }


    public function index(){

        return $this->ads->index();
    }


    public function create(){

        return $this->ads->create();
    }


    public function store(AdsRequest $request){
        $request->validated();
        return $this->ads->store($request);

    }




    public function destroy($id){

        return $this->ads->destroy($id);
    }

    public function save_images(Request $request){

        return $this->ads->save_images($request);
    }

}
