<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'email' => 'required|min:1|max:200',
            'password' => 'required|min:1|max:200'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'NAME',
            'surname' => 'SURNAME'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'NAME field is required!',
            'surname' => 'SURNAME field is required!'
        ];
    }
}
