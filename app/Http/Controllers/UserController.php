<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdatePasswordRequest;

class UserController extends Controller
{

    //Affiche les infos de l'utilisateur connecté
    public function account()
    {
        //On récupère l'utilisateur connecté via la variable $user
        $user = Auth::user();
        
        //On retourne la vue du compte utilisateur avec la variable $user
        return view('users.account', compact('user'));
    }


    //Affiche la page de mise à jour de profil
    public function edit_account()
    {
        $user = Auth::user();
        
        return view('users.edit', compact('user'));
    }


    //Mise à jour de profil
    public function update_account(UpdateUserRequest $request)
    {
        $data = $request->all();

        // if(isset($data['avatar'])){
        //   $data['avatar'] = $this->saveImage($request->avatar);

        //   if(isset($this->user->avatar)){
        //     $this->deleteCurrentAvatar($this->user->avatar);
        //   }
        // }

        Auth::user()->update($data);

        Flashy::primary('Félicitations, votre compte a été mis à jour !');

        return redirect()->route('account_path');
    }


    //Affiche la page de mise à jour de mot de passe
    public function set_password()
    {   
        return view('users.new_password');
    }


    //Mise à jour du mot de passe
    public function update_password(UpdatePasswordRequest $request)
    {
        //On vérifie si le mdp actuel correspond à celui enregistré en bdd
        $passwordIsCorrect = Hash::check($request->current_password, $request->user()->password);

        //Si oui, on enregistre le nouveau mdp
        if($passwordIsCorrect){

            Auth::user()->update(['password' => bcrypt($request->new_password)]);

            Flashy::primary('Félicitations, votre mot de passe a été mis à jour !');

            return redirect()->route('account_path');

        } else {//Sinon, on affiche un message d'erreur

            return redirect()->back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect !']);

        }
    }


    //Affiche la page de la liste des artisans
    public function index()
    {   
        $users = User::all();
        return view('users.artisans', compact('users'));
    }


    //Affiche la page de profil d'utilisateur 
    public function profile(User $user)
    {
        return view('users.profile', compact('user'));
    }
}
