<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|ends_with:pup.edu.ph',
            'password' => 'required'
        ];
    }


    public function messages(){
        return [
            'email.required' => 'Wala Kang Email Boi',
            'email.email' => 'Hindi Yan Email Boi',
            'email.ends_with' => 'Hindi Yan PUP Email Boi',
            'password.required' => 'Wala Kang Password Boi'
        ];
    }
}
