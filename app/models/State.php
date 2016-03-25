<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    
    protected $table = 'states';
	public $timestamps = false;


    /* Ralación con modelo Municipality*/
    public function municipalities(){

        return $this->hasMany(Municipality::class);
    }

    /* Ralación con modelo City*/
    public function tasks(){

        return $this->hasMany(City::class);
    }
}
