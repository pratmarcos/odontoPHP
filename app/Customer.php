<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = "customers";

    protected $fillable = ['name', 'lastname', 'dni', 'phone', 'email', 'address', 'birthdate', 'sex', 'notes',];

	
	public function scopeName($query, $name) {

        if(trim($name) != "") {
            $query->where('lastname', "LIKE", "%$name%");
        }
    }
    
	public function scopeDni($query, $dni) {

        if(trim($dni) != "") {
            $query->where('dni', $dni);
        }
    }


	public static function filterAndPaginate($name, $dni) {
        return Customer::name($name)->dni($dni)->orderBy('id', 'ASC')->paginate();
    }

    public function accounts() {
        return $this->hasMany('App\Account');
    }

    public function histories() {
        return $this->hasMany('App\History');
    }

}
