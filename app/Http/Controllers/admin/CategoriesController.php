<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoriesrequest;
use App\Interface\categoryrepositoryinterface;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $categories;

    public function __construct( categoryrepositoryinterface $categories)
    {
               $this->categories=$categories;
    }

public function index(){

    return $this->categories->index();
}


public function create(){

    return $this->categories->create();
}


public function store(categoriesrequest $request){
             $request->validated();
    return $this->categories->store($request);

}


public function edit($id){

    return $this->categories->edit($id);
}

public function update(categoriesrequest $request){

    $request->validated();
    return $this->categories->update($request);

}

public function destroy($id){

    return $this->categories->destroy($id);
}


}
