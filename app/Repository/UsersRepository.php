<?php
namespace App\Repository;

use App\Interface\UsersRepositoryinterface;
use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersRepository implements UsersRepositoryinterface
{
    public function index()
    {

        $users=Admin::where('id','!=',auth()->user()->id)->get();
        return view('admin.users.index',compact('users'));
    }






    public function create()
    {
        $roles=Role::all();

        return view('admin.users.create',compact('roles'));
    }




    public function store($request)
    {

        Admin::create([

            "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "role_id"=>$request->role_id,

        ]);

        flash()->addsuccess(trans('messages.save_message'));
        return back();

    }




    public function edit($id)
    {

        $user=Admin::find($id);
        $roles=Role::all();
        if(!$user){

            flash()->adderror(trans('messages.data not found'));
            return redirect()->route('users');


        }

        else{

            return view('admin.users.edit',compact('user','roles'));

        }

    }




    public function update($request)
    {

          $user=Admin::find($request->id);

          if(!$user){

            flash()->adderror(trans('messages.data not found'));
            return redirect()->route('users');

          }


            else{
                $user->update([
                    "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],
                    "email"=>$request->email,
                    "password"=>Hash::make($request->password),
                         "role_id"=>$request->role_id,
                ]);

            }


            flash()->addsuccess(trans('messages.update_message'));
            return back();
    }




    public function destroy($id)
    {

      User::destroy($id);
      flash()->adderror(trans('messages.delete_message'));
      return back();
    }
}
