<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Interface\SliderRepositoryInterface;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliders;

    public function __construct( SliderRepositoryInterface $sliders)
    {
               $this->sliders=$sliders;
    }


    public function index(){

        return $this->sliders->index();
    }


    public function create(){

        return $this->sliders->create();
    }

    public function image_in_folder(Request $request){

        return $this->sliders->image_in_folder($request);
    }


    public function store(Request $request){

        return $this->sliders->store($request);

    }


    public function edit($id){

        return $this->sliders->edit($id);
    }

    public function update(Request $request){
           $request->validated();
        return $this->sliders->update($request);

    }

    public function destroy($id){

        return $this->sliders->destroy($id);
    }
}
