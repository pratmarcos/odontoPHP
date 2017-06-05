<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Redirect;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function __constructor(){
        $this->middleware('auth');
        $this->middleware('admin', ['only' =>['edit', 'update', 'destroy', 'create']]);
    }
    
    public function index(Request $request)
    {
        $users = User::filterAndPaginate($request->get('name'));
        if($request->order == 'name'){
            $users = User::orderBy('name', 'ASC')->paginate();
        }
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        if($request->path){
            $storagePath = $request->path->storeAs('images', $request->path->getClientOriginalName());
            $user->path = $request->path->getClientOriginalName();
        }
        $user->save();
        Session::flash('message','Usuario creado correctamente');
        return redirect::to('admin/users');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        if($request->path){
            $storagePath = $user->path->storeAs('images', $user->path->getClientOriginalName());
            $user->path = $request->path->getClientOriginalName();
        }
        $user->save();
        Session::flash('message','Usuario actualizado correctamente');
        return redirect::to('admin/users');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('message','Usuario eliminado correctamente');
        return redirect::to('admin/users');

    }
}
