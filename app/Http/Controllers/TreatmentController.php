<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\GroupTreatment;
use App\Treatment;
use Session;
use Redirect;

class TreatmentController extends Controller
{
    public function index(Request $request)
    {
        //return dd($treatments);

        $treatments = Treatment::filterAndPaginate($request->get('name'), $request->get('grouptreatment_id'));
        $groupstreatments = GroupTreatment::pluck('name', 'id');
        return view('admin.treatments.index', compact('treatments', 'groupstreatments'));
    }

    public function create()
    {
        $groupstreatments = GroupTreatment::pluck('name', 'id');
        return view('admin.treatments.create', compact('groupstreatments'));
    }

    public function store(Request $request)
    {
        $treatment = new Treatment($request->all());
        $treatment->save();
        Session::flash('message', 'Tratamiento creado correctamente');
        return redirect::to('admin/treatments');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $treatment = Treatment::find($id);
        $groupstreatments = GroupTreatment::pluck('name', 'id');
        return view('admin.treatments.edit', compact('treatment', 'groupstreatments'));
    }

    public function update(Request $request, $id)
    {
        $treatment = Treatment::find($id);
        $treatment->fill($request->all());
        $treatment->save();
        Session::flash('message','Tratamiento modificado');
        return redirect::to('admin/treatments');
    }

    public function destroy($id)
    {
        //
    }
}
