<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\sectionrequest;
use App\Interface\sectionrepositoryinterface;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    protected $sections;

    public function __construct( sectionrepositoryinterface $sections)
    {
               $this->sections=$sections;
    }




    public function index()
    {
        return $this->sections->index();
    }

    public function create()
    {
        return $this->sections->create();
    }


    public function store(sectionrequest $request)
    {

        $request->validated();
        return $this->sections->store($request);
    }

    public function edit($id)
    {
        return $this->sections->edit($id);
    }

    public function update(sectionrequest $request)
    {
        $request->validated();
        return $this->sections->update($request);
    }

    public function destroy($id)
    {
        return $this->sections->delete($id);
    }


}
