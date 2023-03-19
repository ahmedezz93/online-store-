<?php
namespace App\Interface;


 interface ProductRepositoryInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($id);
    public function store_price($request);
    public function store_stock($request);
    public function get_price($id);
    public function get_stock($id);
    public function add_image($id);
    public function image_in_folder($id);
    public function save_image($request);

 }
