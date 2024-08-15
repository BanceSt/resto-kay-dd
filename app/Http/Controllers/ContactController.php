<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //
    public function create(Request $request) {
        $contact = new Contact;
        if (auth()->check()) {
            $contact->user_id = Auth::id();
            $contact->name = auth()->user()->name;
            $contact->last_name = auth()->user()->last_name;
            $contact->email = auth()->user()->email;
        } else {
            $contact->name = $request->name;
            $contact->last_name = $request->last_name;
            $contact->email = $request->email;
        }

        $contact->objet = $request->objet;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route("home");
    }
}
