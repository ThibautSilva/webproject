<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('telephone');
            $table->integer('fax');
            $table->integer('agence_id')->unsigned();
        });
        Schema::create('agence', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('urlphoto');
            $table->string('nom');
            $table->string('adresse');
            $table->integer('telephone');
            $table->integer('fax');
        });
        Schema::create('voiture', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('modele');
            $table->date('datefabrication');
            $table->integer('hauteur');
            $table->integer('largeur');
            $table->integer('poids');
            $table->integer('puissance');
            $table->integer('agence_id')->unsigned();
            $table->integer('statut_id')->unsigned();
        });
        Schema::create('statut', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('name');
        });
        Schema::table('agent', function(Blueprint $table){
            $table->foreign('agence_id')->references('id')->on('agence');
        });
        Schema::table('voiture', function(Blueprint $table){
            $table->foreign('agence_id')->references('id')->on('agence');
        });
        Schema::table('voiture', function(Blueprint $table){
            $table->foreign('statut_id')->references('id')->on('statut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
