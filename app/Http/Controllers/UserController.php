<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $us = user::orderBy('id', 'DESC')->paginate(3);

        return view ('User.index', compact('us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'name'=>'required', 'fatherlastname'=>'required', 'motherlastname'=>'required','birthdate'=>'required', 'gender'=>'required', 'phonenumber'=>'required', 'address'=>'required', 'arrivaldate'=>'required', 'registrationdate'=>'required', 'role_id'=>'required', 'position_id'=>'required', 'department_id'=>'required',  'email'=>'required', 'password'=>'required']);
        user::create($request->all());
        return redirect()->route('user.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $us=user::find($id);
        return view('User.show',compact('us'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $us=user::find($id);
        return view('User.edit',compact('us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['name'=>'required', 'fatherlastname'=>'required', 'motherlastname'=>'required','birthdate'=>'required', 'gender'=>'required', 'phonenumber'=>'required', 'address'=>'required', 'arrivaldate'=>'required', 'registrationdate'=>'required', 'role_id'=>'required', 'position_id'=>'required', 'department_id'=>'required',  'email'=>'required', 'password'=>'required']);
 
        user::find($id)->update($request->all());
        return redirect()->route('user.index')->with('success','Registro actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::find($id)->delete();
        return redirect()->route('user.index')->with('success','Registro eliminado Correctamente');
    }
}
