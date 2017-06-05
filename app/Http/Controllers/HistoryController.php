<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\History;
use App\Customer;
use App\GroupTreatment;
use App\Account;
use App\Treatment;
use App\Http\Request\CustomerRequest;
use Carbon\Carbon;

class HistoryController extends Controller
{

    public function index(Request $request, $id)
    {
        $histories = History::filterAndPaginate($request->get('my_checkbox'));
        //return dd($histories);

        $customer = Customer::find($id);
        return view('dentist.histories.index', compact('histories', 'customer'));
    }

    public function getTreatments($id){
            $treatments = Treatment::treatments($id);
            return response()->json($treatments);
    }


    public function create($id)
    {
        $customer = Customer::find($id);
        //$groupstreatments = GroupTreatment::pluck('name', 'id');
        $groupstreatments = GroupTreatment::orderBy('id', 'ASC')->paginate();

        //$treatments = Treatment::pluck('process', 'id');
        $treatments = Treatment::orderBy('id', 'ASC')->paginate();
        $histories = History::orderBy('id', 'ASC')->paginate(5);
        //return dd($histories);
        return view('dentist.histories.create', compact('customer', 'groupstreatments', 'treatments', 'histories'));
    }

    public function store(Request $request)
    {
        $treatment = Treatment::where('process', "LIKE" , "%$request->treatment_id%")->orderBy('id', 'ASC')->take(1)->get();
        foreach ($request->my_checkbox as $key => $value) {
            $account = new Account($request->all());
            $account->treatment_id = $treatment[0]->id;
            $account->description = 'no comentarios';
            $account->type = 'charge';
            $account->save();
            $history = new History($request->all());
            $history->treatment_id = $treatment[0]->id;
            $history->tooth = $value;
            $history->account_id = $account->id;
            $history->save();
        }
        Session::flash('message','Historia guardada');
        return redirect::to('customers');                 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $history = History::find($id);
        return view('dentist.histories.edit', compact('history'));
    }

    public function update(Request $request, $id)
    {
        $history = History::find($id);
        $history->fill($request->all());
        $history->save();
        Session::flash('message', 'Historia modificada correctamente');
        return redirect::to('customers');        
    }

    public function destroy($id)
    {
        $history = History::find($id);
        $history->delete();
        Session::flash('message','Movimiento eliminado');
        return redirect::to('customers');
    }
}
