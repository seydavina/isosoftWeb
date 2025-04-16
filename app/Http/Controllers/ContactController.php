<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    /**
     * Affiche la page de contact ou la page d'accueil via Inertia.
     */
    public function show()
    {
        return Inertia::render('Welcome');
    }

    /**
     * Traite l'envoi du formulaire de contact.
     */
    public function send(Request $request)
    {
        // Validation des champs du formulaire
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Envoi de l'e-mail à l'adresse souhaitée
        Mail::to('limamoudotcom@gmail.com')->send(new ContactFormMail($validated));

        // Redirige vers la page précédente avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
