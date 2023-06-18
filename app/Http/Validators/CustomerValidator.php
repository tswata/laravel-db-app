<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class CustomerValidator extends Validator{
    public function validateCustomer($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
//     public function validateCustomer($attribute, $value, $parameters, $validator)
// {
//     return $value % 2 == 0;
// }

}