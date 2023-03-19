<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class shippingrequest extends FormRequest
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

"shipping_name_ar"=>"required",
"shipping_name_en"=>"required",
"plain_value"=>"required|numeric"
        ];
    }

    public function messages()
    {
        return [
            "shipping_name_ar.required"=>trans('validation.required'),
            "shipping_name_en.required"=>trans('validation.required'),

        ];
    }

}
