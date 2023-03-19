<?php
namespace App\Interface\site;


 interface wishlistSiterepositoryinterface{

    public function store_wishlist();
    public function wishlist();
    public function delete($request);


 }
