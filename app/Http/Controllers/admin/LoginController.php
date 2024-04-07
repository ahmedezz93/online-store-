<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\adminloginrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function store_login(adminloginrequest $request)
    {
        $request->validated();

        if ( auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))

        {
            return redirect()->route('admin.dashboard');
        }


        else {
            noty()->addError('يرجى ادخال بيانات صحيحة');
            return back();
        }
    }


public function destroy(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('admin.login');


}


}
