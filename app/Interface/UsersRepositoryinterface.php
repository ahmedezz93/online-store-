<?php
namespace App\Interface;


 interface UsersRepositoryinterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function destroy($id);

 }
