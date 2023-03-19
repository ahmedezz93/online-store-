<?php

namespace App\Http\Traits;

use App\Models\verification_user;

trait Verification_CodeTrait{

public function sms_validation($id){

    $code=mt_rand(100000,999999);

verification_user::where('user_id','!=',Null)->where(['user_id'=>$id])->delete();

return verification_user::create([

    "user_id"=>$id,

    "code"=>$code,

]);
}

public function getsmsverifymessage($code){

    $message = " is your verification code for your account";

    return $code.$message;
}


}
