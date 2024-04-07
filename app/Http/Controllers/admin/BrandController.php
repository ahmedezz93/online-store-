<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Interface\brandrepositoryinterface;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brands;

    public function __construct( brandrepositoryinterface $brands)
    {
               $this->brands=$brands;
    }


    public function index(){

        return $this->brands->index();
    }


    public function create(){

        return $this->brands->create();
    }


    public function store(BrandRequest $request){
        $request->validated();
        return $this->brands->store($request);

    }


    public function edit($id){

        return $this->brands->edit($id);
    }

    public function update(BrandRequest $request){
        $request->validated();

        return $this->brands->update($request);

    }

    public function destroy($id){

        return $this->brands->destroy($id);
    }

}
