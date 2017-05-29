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
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobile')->nullable();
            $table->boolean('admin')->default(false);
            $table->integer('agence_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('agence', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('fax')->nullable();
            $table->integer('photo_id')->unsigned()->nullable();
        });
        Schema::create('vehicule', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('modele');
            $table->string('datefabrication')->nullable();
            $table->integer('hauteur')->nullable();
            $table->integer('largeur')->nullable();
            $table->integer('poids')->nullable();
            $table->integer('puissance')->nullable();
            $table->integer('photo_id')->unsigned()->nullable();
            $table->integer('agence_id')->unsigned()->nullable();
            $table->integer('statut_id')->unsigned()->nullable();
        });
        Schema::create('historique', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('debutloc');
            $table->string('finloc');
            $table->integer('users_id')->unsigned();
            $table->integer('vehicule_id')->unsigned();
        });
        Schema::create('photo', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('urlphoto')->unsigned();
        });
        Schema::create('statut', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('agence_id')->references('id')->on('users');
        });
        Schema::table('vehicule', function (Blueprint $table) {
            $table->foreign('agence_id')->references('id')->on('agence');
        });
        Schema::table('vehicule', function (Blueprint $table) {
            $table->foreign('photo_id')->references('id')->on('photo');
        });
        Schema::table('agence', function (Blueprint $table) {
            $table->foreign('photo_id')->references('id')->on('photo');
        });
        Schema::table('vehicule', function (Blueprint $table) {
            $table->foreign('statut_id')->references('id')->on('statut');
        });
        Schema::table('historique', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users');
        });
        Schema::table('historique', function (Blueprint $table) {
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
        Schema::drop('historique');
        Schema::drop('vehicule');
        Schema::drop('agence');
        Schema::drop('users');
        Schema::drop('statut');
        Schema::drop('photo');
    }
}
