<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $table = "hours"; 
   
    protected $fillable = [
        'day', 'start', 'end', 'dentist_id',
    ];
}
