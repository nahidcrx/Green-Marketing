<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categorytable';
    protected $primaryKey = 'cid';
    public $timestamps = false;
}
