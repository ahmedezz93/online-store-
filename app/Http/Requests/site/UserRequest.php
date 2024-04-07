<?php

namespace App\Http\Requests\site;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "mobile_user"=>"required",
            "password_user"=>"required",

        ];
    }


    public function messages()
    {
        return [
            "mobile_user,password_user.required"=>trans('validation.required'),
        ];
    }

}
