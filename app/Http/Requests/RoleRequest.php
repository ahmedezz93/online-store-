<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required|unique:roles,name,'.$this->id,
            'permissions' => 'required|array|min:1',
        ];
    }


    public function messages()
    {
        return [
            'name,permissions.required' => trans('validation.required'),
            'name.unique' => trans('validation.unique'),
            "permissions"=>trans('validation.array'),
            "permissions"=>trans('validation.min'),

        ];
    }

}
