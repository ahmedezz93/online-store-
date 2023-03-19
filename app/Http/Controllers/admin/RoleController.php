<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Interface\RolesRepositoryinterface;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roles;

    public function __construct( RolesRepositoryinterface $roles)
    {
               $this->roles=$roles;
    }


    public function index(){

        return $this->roles->index();
    }


    public function create(){

        return $this->roles->create();
    }


    public function store(RoleRequest $request){
          $request->validated();
        return $this->roles->store($request);

    }


    public function edit($id){

        return $this->roles->edit($id);
    }

    public function update(RoleRequest $request){
        $request->validated();
        return $this->roles->update($request);

    }

    public function destroy($id){

        return $this->roles->destroy($id);
    }
}
