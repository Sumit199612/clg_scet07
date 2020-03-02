<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tnp extends Model
{
    protected $table = 'tnps';
    public $timestamps = true;
	public $primaryKey = 'tnp_id';
}
