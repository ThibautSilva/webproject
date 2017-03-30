<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Agent extends Model
{

    public function agent()
    {
        return $this->belongsToMany('App\Auteur');
    }



}