<?php

namespace App\Http\Controllers;

use App\Mail\MailReceived;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request; 

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'tipo-trasporto' => 'required|string|max:255',
            'citta-partenza' => 'required|string|max:255',
            'regione-partenza' => 'required|string|max:255',
            'citta-destinazione' => 'required|string|max:255',
            'regione-destinazione' => 'required|string|max:255',
            'data-consegna' => 'nullable|date',
            'descrizione-carico' => 'nullable|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->tipo_trasporto = $request->input('tipo-trasporto');
        $contact->citta_partenza = $request->input('citta-partenza');
        $contact->regione_partenza = $request->input('regione-partenza');
        $contact->citta_destinazione = $request->input('citta-destinazione');
        $contact->regione_destinazione = $request->input('regione-destinazione');
        $contact->data_consegna = $request->input('data-consegna');
        $contact->descrizione_carico = $request->input('descrizione-carico');
        $contact->assicurazione_carico = $request->has('assicurazione-carico') ? 1 : 0;
        $contact->merci_infiammabili = $request->has('merci-infiammabili') ? 1 : 0;
        $contact->email = $request->input('email');
        $contact->telefono = $request->input('telefono');
        $contact->save();

        
        Mail::to('giuseppeguerrera21@gmail.com')->send(new MailReceived($contact)); 

        return redirect()->back()->with('success', 'Richiesta inviata con successo!');
    }
}

