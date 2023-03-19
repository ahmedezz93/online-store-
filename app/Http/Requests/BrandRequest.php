<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            "name_ar"=>"required|unique:brands,name->ar,".$this->id,
            "name_en"=>"required|unique:brands,name->en,".$this->id,
            'photo'=>'image|mimes:jpg,png,jpeg',

         ];
    }

    public function messages()
    {
        return [
            "name_ar,name_en.required"=>trans('validation.required'),
            "name_ar,name_en.unique"=>trans('validation.unique'),
            "photo.image"=>trans('validation.image'),
            "photo.mimes"=>trans('validation.mimetypes')

         ];
     }

}
