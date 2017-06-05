<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListadoController extends Controller
{
    
    public function list_customers() {

        $customers = Customer::paginate(2);

        return view('customers.index')->with('customers', $customers);

    }

}
