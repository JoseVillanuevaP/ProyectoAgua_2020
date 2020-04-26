<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EdificioRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required|unique:edificios,name'.$this->tag
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'El campo nombre  es obligatorio',
            'name.unique'=>'El campo nombre  ya existe en el sistema'
        ];
    }
}
