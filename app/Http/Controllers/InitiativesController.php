<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Initiative;


class InitiativesController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Initiative::orderBy('name',
        'location',
        'description',
        'is_pre' ,
        'start_date',
        'end_date' ,
        'conducted_by',
        'donation_amount'
)->paginate(5);
        return view('initiativeCRUD.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('initiativeCRUD.create');
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
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'is_pre' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'conducted_by' => 'required',
            'donation_amount' => 'required',
        ]);
            
        Initiative::create($request->all());

        return redirect()->route('initiativeCRUD.index')
                        ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Initiative::find($id);
        return view('initiativeCRUD.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Initiative::find($id);
        return view('initiativeCRUD.edit',compact('item'));
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
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'is_pre' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'conducted_by' => 'required',
            'donation_amount' => 'required', ]);

        Initiative::find($id)->update($request->all());

        return redirect()->route('initiativeCRUD.index')
                        ->with('success','Initiative updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Initiative::find($id)->delete();
        return redirect()->route('initiativeCRUD.index')
                        ->with('success','Initiative deleted successfully');
    }
}