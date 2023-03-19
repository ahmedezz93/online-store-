<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
public function index(){

     $data['orders']=Order::sum('PaidCurrencyValue');

     $data['num_orders']=Order::count();
     $data['num_products']=Product::count();
     $data['clients']=User::count();
     $data['all_orders']=Order::paginate(5);

    return view('admin.dashboard_admin',$data);
}

}
