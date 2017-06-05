<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Hour;
use Auth;

class HoursController extends Controller
{

    public function index(Request $request)
    {
        $hours = Hour::orderBy('day', 'ASC')->paginate();
        //return dd($hours);
        return view('dentist.hours.index', compact('hours'));
    }

    public function create()
    {
        return view('dentist.hours.create');
    }

    public function store(Request $request)
    {
        $hours = new Hour($request->all());
        $hours->dentist_id = Auth::user()->id; 
        $hours->save();
        Session::flash('message','Hora agregada');
        return redirect::to('hours');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $hour = Hour::find($id);
        return view('dentist.hours.edit', compact('hour'));
    }

    public function update(Request $request, $id)
    {
        //return dd($request);

        $hour = Hour::find($id);
        $hour->fill($request->all());
        $hour->save();
        Session::flash('message', 'Horario modificado');
        return redirect::to('hours');        
        
    }

    public function destroy($id)
    {
        $hour = Hour::find($id);
        $hour->delete();
        Session::flash('message','Hora eliminada');
        return redirect::to('hours');
    }
}
