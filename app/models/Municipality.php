<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = 'municipalities';
	public $timestamps = false;

    /*Relacion con modelo State*/
    public function parishes()
    {
        return $this->hasMany(Parish::class);
    }

    /*Relacion con modelo State*/
	public function state(){

        return $this->belongsTo(State::class);
    }
}
