<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users"; 
   
    protected $fillable = [
        'name', 'email', 'password', 'type', 'username', 'phone', 'mobile', 'path',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function filterAndPaginate($name) {
        return User::name($name)->orderBy('id', 'ASC')->paginate();
    }

    public function scopeName($query, $name) {

        if(trim($name) != "") {
            $query->where('name', "LIKE", "%$name%");
        }
    }
}
