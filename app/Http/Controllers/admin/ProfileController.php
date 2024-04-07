<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\profilerequest;
use App\Interface\profilerepositoryinterface;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profile;

    public function __construct( profilerepositoryinterface $profile)
    {
               $this->profile=$profile;
    }

public function edit_profile(){

    return $this->profile->edit_profile();
}


public function update_profile(profilerequest $request){


    $request->validated();
    return $this->profile->update_profile($request);
}

}
