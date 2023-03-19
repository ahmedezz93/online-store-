<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Interface\UsersRepositoryinterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;

    public function __construct( UsersRepositoryinterface $users)
    {
               $this->users=$users;
    }


    public function index(){

        return $this->users->index();
    }


    public function create(){

        return $this->users->create();
    }


    public function store(AdminRequest $request){
      $request->validated();
        return $this->users->store($request);

    }


    public function edit($id){

        return $this->users->edit($id);
    }

    public function update(AdminRequest $request){
        $request->validated();
        return $this->users->update($request);

    }

    public function destroy($id){

        return $this->users->destroy($id);
    }
}
