<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReporteRequest extends FormRequest
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
            'file' => 'required|mimes:jpg,jpeg,png'
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'Debe de subir una imagen',
            'file.mimes'=> 'Debe de subir una imagen con extensión jpg, jpeg o png'
        ];
    }
}
