<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loc = location::orderBy('id', 'DESC')->paginate(3);

        return view ('Location.index', compact('loc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'name'=>'required', 'longitude'=>'required', 'latitude'=>'required', 'user_id'=>'required']);
        location::create($request->all());
        return redirect()->route('location.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $loc=location::find($id);
        return view('Location.edit', compact('loc'));
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
         $this->validate($request,[ 'name'=>'required', 'longitude'=>'required', 'latitude'=>'required', 'user_id'=>'required']);
 
        location::find($id)->update($request->all());
        return redirect()->route('location.index')->with('success','Registro actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         location::find($id)->delete();
        return redirect()->route('location.index')->with('success','Registro eliminado Correctamente');
    }
    
}
