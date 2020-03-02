<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    protected $table = 'administrations';
    public $timestemps = 'true';
    public $primaryKey = 'a_id';
}
