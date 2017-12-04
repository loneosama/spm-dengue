<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Treatment;


class TreatmentController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $treatment_types =  ['vn' => 'vaccination','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment'];
      $origins =  ['r' => 'testing','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment'];
      $doctors = ['jb' => 'Dr james bond ','mj' => 'Dr micheal jackson','jc' => 'Dr jackie chan','ws' => 'Dr william stallins','ew' => 'Dr ema watson'];  
      $items = Treatment::orderBy( 'treatment_name','treatment_type','description','origin','is_foreign_doctor' )->paginate(5);
        return view('treatmentCRUD.index',compact('items','treatment_types','doctors'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treatmentCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [


            'treatment_name' => 'required','treatment_type' => 'required','description' => 'required','origin'  => 'required','is_foreign_doctor' => 'required',

        ]);
            
        Treatment::create($request->all());

        return redirect()->route('treatmentCRUD.index')
                        ->with('success','Treatment created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatment_types =  ['vn' => 'vaccination','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment'];
        $origins =  ['r' => 'testing','bltr' => 'bleeding treatment','fvtr' => 'fever treatment','lab' => 'labortary tests','clinic' => 'clinical treatment'];
        $doctors = ['jb' => 'Dr james bond ','mj' => 'Dr micheal jackson','jc' => 'Dr jackie chan','ws' => 'Dr william stallins','ew' => 'Dr ema watson'];    
        $item = Treatment::find($id);
        return view('treatmentCRUD.show',compact(['item','doctors','origins','treatment_types']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $item = Treatment::find($id);
        return view('treatmentCRUD.edit',compact('item'));
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
        $this->validate($request, [    
            'treatment_name' => 'required','treatment_type' => 'required','description' => 'required','origin'  => 'required','is_foreign_doctor' => 'required',
                    ]);

        Treatment::find($id)->update($request->all());

        return redirect()->route('treatmentCRUD.index')
                        ->with('success','Treatment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Treatment::find($id)->delete();
        return redirect()->route('treatmentCRUD.index')
                        ->with('success','Treatment deleted successfully');
    }
}