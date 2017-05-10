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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');            
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone');
            $table->integer('fax');
            $table->integer('mobile');
            $table->boolean('admin')->default(false);
            $table->integer('agence_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('agence', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('urlphoto');
            $table->string('nom');
            $table->string('adresse');
            $table->integer('telephone');
            $table->integer('fax');
        });
        Schema::create('vehicule', function(Blueprint $table){
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
        Schema::create('historique', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->date('debutloc');
            $table->date('finloc');
            $table->integer('users_id')->unsigned();
            $table->integer('vehicule_id')->unsigned();
        });
        Schema::create('statut', function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('name');
        });
        Schema::table('users', function(Blueprint $table){
            $table->foreign('agence_id')->references('id')->on('users');
        });
        Schema::table('vehicule', function(Blueprint $table){
            $table->foreign('agence_id')->references('id')->on('agence');
        });
        Schema::table('vehicule', function(Blueprint $table){
            $table->foreign('statut_id')->references('id')->on('statut');
        });
        Schema::table('historique', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users');
        });
        Schema::table('historique', function(Blueprint $table){
            $table->foreign('vehicule_id')->references('id')->on('vehicule');
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
