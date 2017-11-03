<?php

namespace App;

class Compliment extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
