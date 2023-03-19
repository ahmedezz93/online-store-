<?php
namespace App\Repository;

use App\Interface\profilerepositoryinterface;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class profilerepository implements profilerepositoryinterface{

    public function edit_profile(){

        return view('admin.profile.edit_profile');
    }


    public function update_profile($request){


Admin::where('id',$request->id)->update([

"name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],
"email"=>$request->email,
"password"=>Hash::make($request->password),

]);

flash()->addsuccess(trans('messages.update_message'));
return back();

    }

}
