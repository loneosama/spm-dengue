<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;


class PatientController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Patient::orderBy('first_name','last_name','gender','contact','dob','address','bloodgroup','city','district','diagnosed','is_diagnosed_before'
)->paginate(5);
        return view('patientCRUD.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities =	['khi' => 'karachi','swl' => 'sahiwal','hyd' => 'hyderabad','mux' => 'multan','fbd' => 'faisalabad'];                
        return view('patientCRUD.create')->with('cities',$cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 

            ['first_name' => 'required', 'last_name' => 'required','gender' => 'required',
                'dob' => 'required','address'  => 'required' ,'bloodgroup'  => 'required'
                ,'city'  => 'required','district'  => 'required','diagnosed'  => 'required' ]


        );
        //var_dump()    
        Patient::create($request->all());

        return redirect()->route('patientCRUD.index')
                        ->with('success','Patient created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cities =	['khi' => 'karachi','swl' => 'sahiwal','hyd' => 'hyderabad','mux' => 'multan','fbd' => 'faisalabad'];        
        $item = Patient::find($id);
        return view('patientCRUD.show',compact(['item','cities']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities =	['khi' => 'karachi','swl' => 'sahiwal','hyd' => 'hyderabad','mux' => 'multan','fbd' => 'faisalabad'];                
        $item = Patient::find($id);
        return view('patientCRUD.edit',compact(['item','cities']));
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
        $this->validate($request, 
            ['first_name' => 'required', 'last_name' => 'required','gender' => 'required',
                'dob' => 'required','address'  => 'required' ,'bloodgroup'  => 'required','city'  => 'required','district'  => 'required','diagnosed'  => 'required' ]
        );

        Patient::find($id)->update($request->all());

        return redirect()->route('patientCRUD.index')
                        ->with('success','Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::find($id)->delete();
        return redirect()->route('patientCRUD.index')
                        ->with('success','Patient deleted successfully');
    }
}