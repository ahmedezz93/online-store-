<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\UserRegisterRequest;
use App\Http\Requests\site\UserRequest;
use App\Http\Traits\SmsGateways\VictoryLinkSmsTrait;
use App\Http\Traits\Verification_CodeTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginSiteController extends Controller
{

use Verification_CodeTrait;
use VictoryLinkSmsTrait;
public function login(){


    return view('site.auth.login');
}


public function register(){


    return view('site.auth.register');
}


public function store_register(UserRegisterRequest $request){

    try{
       DB::beginTransaction();

       $request->validated();
       $user=User::create([
       "name"=>$request->name,
       "mobile"=>$request->mobile,
       "password"=>Hash::make($request->password),

       ]);

       $id=$user->id;
        $verification=$this->sms_validation($id);
        $message=$this->getsmsverifymessage($verification->code);
        $this->sendSms($user->mobile,$message);
        DB::commit();

           noty()->addsuccess(trans('messages.save_message'));
          return redirect()->route('user_login');

}

catch (\Exception $e) {
    DB::rollBack();
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
}

}

public function store(UserRequest $request){

    $request->validated();
    // $password=$request->password_user;
    // $user=User::where('mobile',$request->mobile_user)->first();


    // if(  $user &&  Hash::check($password, $user->password)){


    //     return redirect()->route('home');

    // }



    if ( auth()->guard('web')->attempt(['mobile' => $request->mobile_user, 'password' => $request->password_user]))

    {
        return redirect()->route('home');
    }


else{

    noty()->adderror(trans('messages.code_error'));
    return back();
}


}

public function destroy(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('user_login');


}

}
