<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OptionRequest;
use App\Interface\Optionrepositoryinterface;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    protected $options;

    public function __construct( Optionrepositoryinterface $options)
    {
               $this->options=$options;
    }


    public function index(){

        return $this->options->index();
    }


    public function create(){

        return $this->options->create();
    }


    public function store(OptionRequest $request){
            $request->validated();
        return $this->options->store($request);

    }


    public function edit($id){

        return $this->options->edit($id);
    }

    public function update(OptionRequest $request){
        $request->validated();
        return $this->options->update($request);

    }

    public function destroy($id){

        return $this->options->destroy($id);
    }

}
