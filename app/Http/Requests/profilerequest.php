<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profilerequest extends FormRequest
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
"name_ar"=>"required",
"name_en"=>"required",
"email"=>"required|unique:admins,email,".$this->id,
"password"=>"required|confirmed",

];


    }


    public function messages()
    {
        return [

            "name_ar.required"=>trans('validation.required'),
            "name_en.required"=>trans('validation.required'),
            "email.required"=>trans('validation.required'),

            "email.unique"=>trans('validation.unique'),
            "password.confirmed"=>trans('validation.confirmed'),

        ];
    }

}
