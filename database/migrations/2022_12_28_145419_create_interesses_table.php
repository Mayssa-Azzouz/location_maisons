<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('maison_id');
            $table->string('nom_user_interesse');
            $table->string('prenom_user_interesse');
            $table->string('email');
            $table->string('N_tele');
            $table->date('date_debut');
            $table->date('date_fin');
            

           $table->foreign('maison_id')->references('id')->on('maisons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interesses');
    }
}
