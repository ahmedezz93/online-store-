<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            "name_ar"=>"required|between:3,255|unique:tags,name->ar,".$this->id,
            "name_en"=>"required|between:3,255|unique:tags,name->en,".$this->id,
            "slug"=>"required|unique:tags,slug,".$this->id,

         ];
     }

    public function messages()
    {
        return [
            "name_ar,name_en,slug.required"=>trans('validation.required'),
            "name_ar,name_en,slug.unique"=>trans('validation.unique'),
            "name_ar,name_en.between"=>trans('validation.between')
         ];
     }

}
