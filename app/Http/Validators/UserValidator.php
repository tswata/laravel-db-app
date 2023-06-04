<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class UserValidator extends Validator{
    public function validateUser($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
//     public function validateUser($attribute, $value, $parameters, $validator)
// {
//     return $value % 2 == 0;
// }

}