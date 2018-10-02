<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = subject::orderBy('id', 'DESC')->paginate(3);
        return view ('Subject.index', compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['course_id'=>'required','name'=>'required', 'description'=>'required']);
        subject::create($request->all());
        return redirect()->route('subject.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subj=subject::find($id);
        return view('Subject.show',compact('subj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subj=subject::find($id);
        return view('Subject.edit',compact('subj'));
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
        $this->validate($request,['course_id'=>'required','name'=>'required', 'description'=>'required']);
 
        subject::find($id)->update($request->all());
        return redirect()->route('subject.index')->with('success','Registro actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        subject::find($id)->delete();
        return redirect()->route('subject.index')->with('success','Registro eliminado Correctamente');
    }
}
