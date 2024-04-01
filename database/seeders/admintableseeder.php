<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admintableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('admins')->delete();
Admin::create([

"name"=>["ar"=>"احمد","en"=>"ahmed"],
"email"=>"admin@yahoo.com",
"password"=>Hash::make("123456789"),

]);


}
}
