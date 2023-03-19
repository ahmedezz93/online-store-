<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Interface\TagsRepositoryInterface;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    protected $tags;

    public function __construct( TagsRepositoryInterface $tags)
    {
               $this->tags=$tags;
    }


    public function index(){

        return $this->tags->index();
    }


    public function create(){

        return $this->tags->create();
    }


    public function store(TagRequest $request){
        $request->validated();
        return $this->tags->store($request);

    }


    public function edit($id){

        return $this->tags->edit($id);
    }

    public function update(TagRequest $request){

        $request->validated();
        return $this->tags->update($request);

    }

    public function destroy($id){

        return $this->tags->destroy($id);
    }

}
