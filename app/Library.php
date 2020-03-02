<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table = 'librarys'; 
    public $timestamps = True;
	public $primaryKey = 'l_id';
}
