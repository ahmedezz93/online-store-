<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\shippingrequest;
use App\Interface\settingrepositoryinterface;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $setting;

    public function __construct( settingrepositoryinterface $setting)
    {
               $this->setting=$setting;
    }

public function shippings($type){

return $this->setting->shippings($type);

}


public function shipping_update(shippingrequest $request){

    return $this->setting->shipping_update($request);

    }


}
