<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Admin extends Authenticatable
{
    use HasFactory;
    use HasTranslations;
    public $translatable=['name'];
    protected $guarded=[];

    public function roles(){


        return $this->belongsto(Role::class,'role_id');
    }


    public function hasAbility($permissions)    //products  //
    {
        $role = $this->roles;

        if (!$role) {
            return false;
        }

        foreach ($role->permession as $permission) {
            if (is_array($permissions) && in_array($permission, $permissions)) {
                return true;
            } else if (is_string($permissions) && strcmp($permissions, $permission) == 0) {
                return true;
            }
        }
        return false;
    }

}
