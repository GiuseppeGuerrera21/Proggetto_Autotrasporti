<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_trasporto');
            $table->string('citta_partenza');
            $table->string('regione_partenza');
            $table->string('citta_destinazione');
            $table->string('regione_destinazione');
            $table->date('data_consegna')->nullable();
            $table->text('descrizione_carico')->nullable();
            $table->boolean('assicurazione_carico')->default(false);
            $table->boolean('merci_infiammabili')->default(false);
            $table->string('email');
            $table->string('telefono');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
