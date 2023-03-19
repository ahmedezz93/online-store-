<?php
namespace App\Interface;


 interface SliderRepositoryInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($id);
    public function image_in_folder($request);




 }
