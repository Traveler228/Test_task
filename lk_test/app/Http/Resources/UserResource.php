<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'date_of_birth' => $this->date_of_birth,
            'image' => $this->image,
            'login' => $this->login,
            'city' => $this->city,
            'email' => $this->email,
            'favorite_books' => $this->favorite_books,
            'favorite_movies' => $this->favorite_movies,
            'created_at' => $this->created_at,
        ];
    }
}
