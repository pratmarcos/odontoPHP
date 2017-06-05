<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = "histories"; 
   
    protected $fillable = [
        'notes', 'treatment_id', 'amount', 'status', 'tooth', 'customer_id', 'account_id',
    ];

	public function scopeTooth($query, $tooth) {

		if($tooth != "") {
			foreach ($tooth as $key => $value) {
			
		        if(trim($value) != "") {
		            $query->where('tooth', "LIKE", "%$value%");
		        }
			}
		}
    }

   	public static function filterAndPaginate($tooth) {
        return History::tooth($tooth)->orderBy('id', 'ASC')->paginate();
    }

    public function customer() {
    	return $this->belongsTo('App\Customer');
    }

    public function treatment() {
    	return $this->belongsTo('App\Treatment');
    }

    public function account() {
        return $this->belongsTo('App\Account');
    }

}
