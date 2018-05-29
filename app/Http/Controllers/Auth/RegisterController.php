<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'username' => 'required|string|min:3|max:30|unique:users',
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required|string||min:8',
            'password' => 'required|confirmed|min:6',
            'website' => 'nullable|url',
            'github' => 'nullable|url'
        ];

        $messages = [
            'username.min' => 'Nom d\'utilisateur trop court (Minimum :min caractères) !',
            'username.unique' => 'Ce nom d\'utilisateur est déjà utilisé.',
            'name.min' => 'Nom trop court (Minimum :min caractères) !',
            'email.unique' => 'Adresse email déjà utilisée.',
            'address.min' => 'Adresse trop courte (Minimum :min caractères) !',
            'password.min' => 'Mot de passe trop court (Minimum :min caractères) !',
            'password.confirmed' => 'Les deux mots de passe ne concordent pas !'
        ];

        return Validator::make($data, $rules, $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
            'website' => $data['website'],
            'github' => $data['github']
        ]);
    }
}
