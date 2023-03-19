<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            "email"=>'required|email|unique:admins,email,'.$this->id,
            "password"=>"required",
                    ];
                }

                public function messages()
                {
                    return [
              "name_ar,name_en,email.required"=>trans('validation.required'),
            "email.email"=>trans('validation.email'),
            "password.required"=>trans('validation.required')

                    ];
                }
            }
