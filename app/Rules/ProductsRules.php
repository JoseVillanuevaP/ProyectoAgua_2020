<?php

namespace App\Rules;

use App\Product;
use Illuminate\Contracts\Validation\Rule;

class ProductsRules implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($anual)
    {
        $this->anual = $anual   ;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {



       return Product::where('mes','=',$value) ->count() ==0 && Product::where('mes','=',$this->anual) ->
           count() ==0;



    }




    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return[
            'El :attribute ya existe mi estimado usuario.',
            'El :attribute ya existe mi estimado usuario.',

        ];
    }
}
