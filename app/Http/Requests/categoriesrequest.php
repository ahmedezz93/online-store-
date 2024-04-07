<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoriesrequest extends FormRequest
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
           "name_ar"=>"required|between:3,255|unique:categories,name->ar,".$this->id,
           "name_en"=>"required|between:3,255|unique:categories,name->en,".$this->id,
           "slug"=>"required|between:3,255",
            'photo'=>'image',
        ];
    }

    public function messages()
    {
        return [
           "name_ar,name_en,slug.required"=>trans('validation.required'),
           "name_ar,name_en,slug.unique"=>trans('validation.unique'),
           "photo.image"=>trans('validation.image'),
           "photo.mimes"=>trans('validation.mimetypes'),
           "name_ar,name_en,slug.between"=>trans('validation.between'),

        ];
    }

}
