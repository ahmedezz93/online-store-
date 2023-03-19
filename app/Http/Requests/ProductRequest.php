<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
             "slug"=>"required|unique:products,slug",
             "description"=>"required",
             "short_description"=>"nullable",
             "sections"=>"required",
             "tags"=>"required",
            "brand_id"=>"required",
        ];
    }

    public function messages()
    {
        return [
            "name_ar,name_en,slug,description,short_description,tags,brand_id,sections.required"=>trans('validation.required'),
            "slug.unique"=>trans('validation.unique'),
        ];

    }

}
