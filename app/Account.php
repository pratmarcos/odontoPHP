<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Datatables;

class Account extends Model
{
    
    protected $table = "accounts";

    protected $fillable = ['description', 'amount', 'type', 'customer_id', 'treatment_id',];

    public function customer() {
    	return $this->belongsTo('App\Customer');
    }

    public function history() {
        return $this->belongsTo('App\History');
    }

    public function treatment() {
    	return $this->belongsTo('App\Treatment');
    }

}
