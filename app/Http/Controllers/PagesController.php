<?php

namespace App\Http\Controllers;

use App\User;
use JavaScript;
use Illuminate\Http\Request;
use Thomaswelton\LaravelGravatar\Facades\Gravatar;

class PagesController extends Controller
{
    public function home(){
        
        $users = User::get(['username', 'latitude', 'longitude', 'email']);

    	$users->map(function($user){
            $user->avatar = Gravatar::src($user->email);
    		$user->profile_url = route('profile_path', $user->username);
    	});

        JavaScript::put(compact('users'));
        
        return view('pages/home');
    }

    public function about(){
        return view('pages/about');
    }
    
}
