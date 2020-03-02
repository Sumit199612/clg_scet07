<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_event extends Model
{
    protected $table = 'sub_events';
    public $timestamps = true;
	public $primaryKey = 'se_id';
}
