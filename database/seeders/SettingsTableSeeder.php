<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('settings')->delete();






    Setting::create([

        "default_locale"=>'ar',
        "default_timezone"=>'Africa/Cairo',
        "reviews_enabled"=>true,
        "auto_approve_reviews"=>true,
        "supported_currencies"=>json_encode(["USD","L.E"]),
        "default_currency"=>['ar'=>'دولار','en'=>'USD'],
        "store_email"=>'admin@ecommerce.test',
        "search_engine"=>'mysql',
        "free_shipping_label"=>['ar'=>'توصيل مجانى','en'=>'free shipping'],
        "local_label"=>['ar'=>'توصيل محلى ','en'=>'local shipping'],
        "outer_label"=>['ar'=>'توصيل خارجي','en'=>'outer shipping'],
        "local_shipping_cost"=>0,
        "outer_shipping_cost"=>0,
        "free_shipping_cost"=>0,
        ]);


}
}

