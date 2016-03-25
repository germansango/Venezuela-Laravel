<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $table = 'parishes';
	public $timestamps = false;

	/*Relacion con modelo Municipality*/
	public function municipality(){

        return $this->belongsTo(Municipality::class);
    }
}
