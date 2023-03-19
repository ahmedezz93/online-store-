<?php
namespace App\Repository;

use App\Interface\RolesRepositoryinterface;
use App\Models\Role;

class RolesRepository implements RolesRepositoryinterface
{
    public function index()
    {

        $roles=Role::all();
return view('admin.roles.roles',compact('roles'));
    }



    public function create()
    {
        return view('admin.roles.create_roles');

    }





    public function store($request)
    {
Role::create([

"name"=>$request->name,
"permession"=>json_encode($request->permissions),

]);

flash()->addsuccess(trans('messages.save_message'));
return back();
    }




    public function edit($id)
    {

        $role=Role::where('id',$id)->first();
          return view('admin.roles.edit_roles',compact('role'));

    }




    public function update($request)
    {

        Role::where('id',$request->id)->update([

       "name"=>$request->name,
       "permession"=>json_encode($request->permissions),

        ]);

        flash()->addsuccess(trans('messages.update_message'));
        return back();

    }




    public function destroy($id)
    {

        Role::destroy($id);
        flash()->adderror(trans('messages.delete_message'));
        return back();
}

}
