<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactsController extends Controller
{
    public function create(){
        return view('pages/contact');
    }

    public function store(ContactRequest $request){

        //Sauvegarde du message en bdd
        $message = Message::create($request->only('name', 'email', 'message'));
        
        //Création du Mailable
        $mailable = new ContactMessage($message);

        //Envoie du mail
        Mail::to('admin@laracarte.com')->send($mailable);

        //Message de succès
        Flashy::primary('Nous vous répondrons dans les plus brefs délais !');

        //Redirection vers la page d'accueil
        return redirect()->route('home_path');
    }
}
