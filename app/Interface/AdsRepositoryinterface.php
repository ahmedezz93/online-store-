<?php
namespace App\Interface;


 interface AdsRepositoryinterface{
    public function index();
    public function create();
    public function store($request);
    public function destroy($id);
    public function save_images($request);

 }
