<?php
namespace App\Interface\site;


 interface ProductSiterepositoryinterface{
    public function get_products($id);
    public function product_details($slug);
    public function search_results($request);

 }
