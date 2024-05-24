<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'message' => 'required|min:5',
            'captcha' => 'required|captcha'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => __('Email field is required'),
            'email.email' => __('Email need to be valid'),
            'message.required' => __('Message field is required'),
            'message.min' => __('Message length min'),
            'captcha.required' => __('Captcha is required'),
            'captcha.captcha' => __('Captcha is required'),
        ];
    }
}
