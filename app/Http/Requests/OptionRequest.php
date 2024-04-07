<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionRequest extends FormRequest
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
            "name_ar"=>"required|between:3,255",
            "name_en"=>"required|between:3,255",
            'price' => 'required|numeric|min:0',
            'product_id' => 'required|exists:products,id',
            'attribute_id' => 'required|exists:attributes,id',
       ];
   }


    public function messages()
    {
        return [
            "name_ar,name_en,price.required"=>trans('validation.required'),
            "price.numeric"=>trans('validation.numeric'),
            "name_ar,name_en.between"=>trans('validation.between'),

        ];
    }

}
