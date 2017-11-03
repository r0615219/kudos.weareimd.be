<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //protected $fillable = ['body', 'id_from', 'id_to'];

    protected $guarded = [];
}