<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'               => 'required|min:3|max:255',
            'address'            => 'required|min:8',
            'email'              => 'required|email|max:255|unique:users,email,'.Auth::user()->id,
            'username'           => 'required|min:3|max:30|unique:users,username,'.Auth::user()->id,
            'website'            => 'nullable|url',
            'github'             => 'nullable|url',
            'twitter'            => 'nullable|url',
            'avatar'             => 'nullable|image|max:4000',
            'bio'                => 'nullable|min:10',
            'laravel'            => 'integer|min:1|max:100',
            'frontend'           => 'integer|min:1|max:100',
            'backend'            => 'integer|min:1|max:100',
            'mobile'             => 'integer|min:1|max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Le nom est trop court (Minimum :min caractères) !',
            'address.min' => 'Adresse trop courte (Minimum :min caractères) !',
            'email.unique' => 'Adresse email déjà utilisée !',
            'username.unique' => 'Nom d\'utilisateur déjà utilisé !',
            'avatar.max' => 'la taille de l\'image ne doit pas exéder :max Ko !',
            'bio.min' => 'Biographie trop courte (Minimum :min caractères) !'
        ];
    }
}
