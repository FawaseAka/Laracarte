<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            'current_password' => 'required|min:6',
            'new_password' => 'required|min:6|same:password_confirmation',
            'password_confirmation' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'min' => 'Mot de passe trop court (Minimum :min caractères) !',
            'same' => 'Les deux mots de passe ne concordent pas !'
        ];
    }
}
