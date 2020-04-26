<?php

namespace App\Http\Requests;

use App\Rules\ProductsRules;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    //para crear un nuevo Request  php artisan make:request ProductController

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
            'edificio_id' =>[
                'required',

            ],
            'description' => [
                'required',
            ],
            'mes' =>[
              'required',
                //new ProductsRules(),
            ],
            'anual' =>[
                'required',
                //new ProductsRules($anual),
            ],

        ];
    }

    public function messages()
    {
        return [


        ];
    }
}
