<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeRequest;
use App\Interface\Attributerepositoryinterface;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    protected $attribute;

    public function __construct( Attributerepositoryinterface $attribute)
    {
               $this->attribute=$attribute;
    }


    public function index(){

        return $this->attribute->index();
    }


    public function create(){

        return $this->attribute->create();
    }


    public function store(AttributeRequest $request){
        
        $request->validated();
        return $this->attribute->store($request);

    }


    public function edit($id){

        return $this->attribute->edit($id);
    }

    public function update(AttributeRequest $request){
           $request->validated();
        return $this->attribute->update($request);

    }

    public function destroy($id){

        return $this->attribute->destroy($id);
    }

}
