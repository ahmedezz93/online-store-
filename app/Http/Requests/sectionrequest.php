<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sectionrequest extends FormRequest
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

       "cat_id"=>"required",
       "name_ar"=>"required|unique:sections,name->ar,".$this->id,
       "name_en"=>"required|unique:sections,name->en,".$this->id,
       "slug"=>"required|unique:sections,slug,".$this->id,
       'photo'=>'image|mimes:jpg,png,jpeg'
        ];
    }


    public function messages()
    {
        return [

            "name_ar,name_en,slug,cat_id.required"=>trans('validation.required'),
            "name_ar,name_en,slug.unique"=>trans('validation.unique'),
            "photo.image"=>trans('validation.image'),
            "photo.mimes"=>trans('validation.mimetypes'),

        ];
    }

}
