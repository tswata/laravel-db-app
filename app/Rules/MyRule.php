<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MyRule implements ValidationRule
{
    private $n;
    public function __construct(int $n)
    {
        $this->num = $n; 
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate($attribute, $value, Closure $fail):void
    {
        if ($value % $this->num !== 0) {
            $fail("{$this->num}で割り切れる数字を入力してください");
        }
    }
}
