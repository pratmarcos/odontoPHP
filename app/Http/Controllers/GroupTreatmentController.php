<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\GroupTreatment;
use Session;
use Redirect;

class GroupTreatmentController extends Controller
{
    public function index(Request $request)
    {
        $groupstreatments = GroupTreatment::filterAndPaginate($request->get('name'));
        return view('admin.groupstreatments.index', compact('groupstreatments'));        
    }

    public function create()
    {
        return view('admin.groupstreatments.create');
    }

    public function store(Request $request)
    {
        $grouptreatment = new GroupTreatment($request->all());
        $grouptreatment->save();
        Session::flash('message','Grupo creado correctamente');
        return redirect::to('admin/groupstreatments');

   }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $grouptreatment = GroupTreatment::find($id);
        return view('admin.groupstreatments.edit', compact('grouptreatment'));
    }

    public function update(Request $request, $id)
    {
        $grouptreatment = GroupTreatment::find($id);
        $grouptreatment->fill($request->all());
        $grouptreatment->save();
        Session::flash('message','Grupo actualizado correctamente');
        return redirect::to('admin/groupstreatments');
    }

    public function destroy($id)
    {
        //
    }
}
