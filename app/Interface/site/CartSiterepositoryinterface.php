<?php
namespace App\Interface\site;


 interface CartSiterepositoryinterface{


    public function add_to_cart();
    public function basket();
    public function delete_from_cart();
    public function total_cartlists();
   public function quantity($request);
 }


