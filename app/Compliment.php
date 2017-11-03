<?php

namespace App;

class Compliment extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function id_from_name($id_from) {
        $user_from = User::All()->where('id', $id_from)->first();
        $name_from = $user_from->name;
        return $name_from;
    }
}
