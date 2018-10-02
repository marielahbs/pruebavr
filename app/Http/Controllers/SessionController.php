<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\session;


class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = session::orderBy('id', 'DESC')->paginate(3);
        return view ('Session.index', compact('session'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['time'=>'required', 'incorrectanswer'=>'required', 'correctanswer'=>'required', 'rating'=>'required', 'station_id'=>'required', 'department_id'=>'required']);
        session::create($request->all());
        return redirect()->route('session.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sess=session::find($id);
        return view('Session.show',compact('sess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sess=session::find($id);
        return view('Session.edit',compact('sess'));
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
        $this->validate($request,['time'=>'required', 'incorrectanswer'=>'required', 'correctanswer'=>'required', 'rating'=>'required', 'station_id'=>'required', 'department_id'=>'required']);
 
        session::find($id)->update($request->all());
        return redirect()->route('session.index')->with('success','Registro actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session::find($id)->delete();
        return redirect()->route('session.index')->with('success','Registro eliminado Correctamente');
    }
}
