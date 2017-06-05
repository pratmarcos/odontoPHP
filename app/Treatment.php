<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = "treatments"; 
   
    protected $fillable = [
        'grouptreatment_id', 'process', 'amount',
    ];


   public static function filterAndPaginate($name, $grouptreatment_id) {
        return Treatment::name($name)->group($grouptreatment_id)->orderBy('id', 'ASC')->paginate(5);
    }

    public function scopeName($query, $name) {

        if(trim($name) != "") {
            $query->where('process', "LIKE", "%$name%");
        }
    }

    public function scopeGroup($query, $grouptreatment_id) {

        if($grouptreatment_id != "") {
            $query->where('grouptreatment_id', $grouptreatment_id);
        }
    }

    public function grouptreatment() {
    	return $this->belongsTo('App\GroupTreatment');
    }

    public function history() {
        return $this->hasMany('App\History');
    }    

    public function account() {
        return $this->hasMany('App\Account');
    } 

    public static function treatments($id) {
        return Treatment::where('grouptreatment_id',$id)->get();
    }
}
