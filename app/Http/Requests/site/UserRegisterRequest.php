<?php

namespace App\Http\Requests\site;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=>"required",
            "mobile"=>"required|unique:users,mobile",
            "password"=>"required|confirmed",
            "password_confirmation"=>"required",

        ];
    }


    public function messages()
    {
        return [
            "name,mobile,password,password_confirmation.required"=>trans('validation.required'),
            "mobile.unique"=>trans('validation.unique'),
            "password.confirmed"=>trans('validation.confirmed'),

        ];
    }

}
