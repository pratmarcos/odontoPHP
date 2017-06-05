<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Account;
use App\Customer;
use App\Treatment;
use App\History;
use Session;
use Redirect;
use App\Http\Request\AccountRequest;
use Carbon\Carbon;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $accounts = Account::all();
        if($request->order == 'description'){
            $accounts = Account::orderBy('description', 'ASC')->paginate();
        }
        if($request->order == 'created_at'){
            $accounts = Account::orderBy('created_at', 'DESC')->paginate();
        }
        return view('dentist.accounts.index', compact('accounts', 'customers'));
    }

    public function create($id)
    {
        //return dd($request);
        $customer = Customer::find($id);
        return view('dentist.accounts.create', compact('customer'));
    }

    public function store(Request $request)
    {
        $account = new Account($request->all());
        //return dd($account);
        $account->treatment_id = 0;
        $account->save();
        Session::flash('message','Movimiento guardado');
        return redirect::to('customers');                 
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        //$histories = History::where('customer_id', $id);
        $treatmento = Treatment::pluck('process', 'id');
        $accounts = Account::orderBy('created_at', 'ASC')->paginate(10);
        return view('dentist.accounts.show', compact('customer', 'accounts', 'treatmento'));        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
