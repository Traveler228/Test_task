<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'last_name' => 'string',
            'first_name' => 'string',
            'date_of_birth' => 'date',
            'password' => 'string',
            'email' => 'string|email',
            'middle_name' => 'string',
            'image' => 'string',
            'login' => 'string',
            'city' => 'string',
            'favorite_books' => 'string',
            'favorite_movies' => 'string'
        ];
    }
}
