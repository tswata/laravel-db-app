<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\UserRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // if ($this->path() == 'users'){
        //     return true;
        // }else {
        //     return false;
        // }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
       {      

        return [
            'お名前'=>'required',
            'ふりがな'=>'required',
            'メールアドレス'=>'required|email',
            '年齢'=>'required|between:0,100|numeric|user',
            '住所'=>'required'
        ];
    }

    public function messages() {
        return ['お名前.required' => 'お名前入れてね','年齢.user' => '年齢は偶数のみ受け付けます'];

    }
}
