<?php
namespace App\Interface;
interface settingrepositoryinterface{


    public function shippings($type);
    public function shipping_update($request);

}
