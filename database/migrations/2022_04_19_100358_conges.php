<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Conges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congés', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> int('id_demande');
            $table-> string('type_demande');
            $table-> string('description')->nullable();
            $table->Date('date_debut');
            $table-> Date('date_fin');
            $table-> string('heure_debut');
            $table-> string('heure_fin');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conges');
    }
}
