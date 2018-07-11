<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Response;

use App\Pier;

class PierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piers = Pier::where('boolDeleted',0)->get();
        return view('Pier.index')->with('piers',$piers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'Pier' => 'required'
        ]);

        $Pier = new Pier;
        $Pier->timestamps = false;
        $Pier->strPierName = $request->input('Pier');
        $Pier->boolDeleted = 0;
        $Pier->save();

        return redirect('/pier')->with('success', 'Pier Added');
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
    public function edit($intPierID)
    {
        $pier = Pier::find($intPierID);
        return view('Pier.edit')->with('pier', $pier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $intPierID)
    {
        $this->validate( $request, [
            'PierName' => 'required'
        ]);

        //
        $Pier = Pier::find($intPierID);
        $Pier->timestamps = false;
        $Pier->strPierName = $request->input('PierName');
        $Pier->save();

        return redirect('/pier')->with('success', 'Pier Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($intPierID)
    {
        $pier = Pier::findOrFail($intPierID);
        $pier->timestamps = false;
        $pier->boolDeleted = 1;
        $pier->save();

        return redirect('/pier')->with('success', 'Pier Successfully Deleted');
        
    }
}
