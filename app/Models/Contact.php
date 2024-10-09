<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_trasporto',
        'citta_partenza',
        'regione_partenza',
        'citta_destinazione',
        'regione_destinazione',
        'data_consegna',
        'descrizione_carico',
        'assicurazione_carico',
        'merci_infiammabili',
        'email',
        'telefono',
    ];
}


