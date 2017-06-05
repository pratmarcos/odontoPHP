<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupTreatment extends Model
{
    protected $table = "groupstreatments"; 
   
    protected $fillable = [
        'name',
	];    

  public static function filterAndPaginate($name) {
        return GroupTreatment::name($name)->orderBy('id', 'ASC')->paginate(5);
    }

    public function scopeName($query, $name) {

        if(trim($name) != "") {
            $query->where('name', "LIKE", "%$name%");
        }
    }

    public function treatment(){
        return $this->hasMany('App\Treatment');
    }

}
