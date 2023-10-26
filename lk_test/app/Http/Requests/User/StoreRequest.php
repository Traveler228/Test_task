<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'password' => 'required|string|confirmed|min:6',
            'email' => 'required|string|email|max:100|unique:users',
            'middle_name' => 'string',
            'image' => 'string',
            'login' => 'required|string|between:2,100',
            'city' => 'string',
            'favorite_books' => 'string',
            'favorite_movies' => 'string'

        ];
    }
}
