<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Customer;
use App\Http\Request\CustomerRequest;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class CustomerController extends Controller
{
   

    public function index(Request $request)
    {
        $customers = Customer::filterAndPaginate($request->get('name'),$request->get('dni'));
        if($request->order == 'name'){
            $customers = Customer::orderBy('name', 'ASC')->paginate();
        }        
        if($request->order == 'lastname'){
            $customers = Customer::orderBy('lastname', 'ASC')->paginate();
        }        
        return view('dentist.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('dentist.customers.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer($request->all());
        $customer->birthdate = Carbon::$request->birthdate;
        $customer->save();
        Session::flash('message','Cliente creado correctamente');
        return redirect::to('customers');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('dentist.customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->fill($request->all());
        $customer->save();
        Session::flash('message', 'Cliente actualizado correctamente');
        return redirect::to('customers');        
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        Session::flash('message','Cliente eliminado correctamente');
        return redirect::to('customers');
    }
}
