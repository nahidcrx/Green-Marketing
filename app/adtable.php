<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adtable extends Model
{
    //
    protected $table = 'adtable';
    protected $primaryKey = 'adid';
    public $timestamps = false;
}
