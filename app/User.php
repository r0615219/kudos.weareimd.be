<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function compliment() {
        return $this->hasMany(Compliment::class);
    }

    public function addCompliment($body) {

        $this->compliment()->create(['body' => $body, 'id_from' => 3]);

        /*Compliment::create([
            'body' => $body,
            'id_from' => 3,
            'user_id' => $this->id
        ]);*/
    }
}
