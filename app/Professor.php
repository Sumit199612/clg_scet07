<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professors'; 
    public $timestamps = True;
	public $primaryKey = 'prof_id';
}
