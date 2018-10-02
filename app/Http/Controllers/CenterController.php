<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\center;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $center = center::orderBy('id', 'DESC')->paginate(3);
        return view ('center.index', compact('center'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Center.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'name', 'street', 'outdoornu', 'interiornum', 'longitude', 'latitude','user_id', 'category'
         $this->validate($request,[ 'name'=>'required', 'street'=>'required', 'outdoornum'=>'required', 'interiornum'=>'required', 'longitude'=>'required', 'latitude'=>'required', 'user_id'=>'required', 'category'=>'required']);
        center::create($request->all());
        return redirect()->route('center.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $center=center::find($id);
        return view('Center.show',compact('center'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $center=center::find($id);
        return view('Center.edit',compact('center'));
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
        $this->validate($request,['name'=>'required', 'street'=>'required', 'outdoornum'=>'required', 'interiornum'=>'required', 'longitude'=>'required', 'latitude'=>'required', 'user_id'=>'required', 'category'=>'required']);
 
        center::find($id)->update($request->all());
        return redirect()->route('center.index')->with('success','Registro actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        center::find($id)->delete();
        return redirect()->route('center.index')->with('success','Registro eliminado Correctamente');
    }
}
