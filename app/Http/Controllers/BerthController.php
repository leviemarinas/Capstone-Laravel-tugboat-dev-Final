<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Response;
use Illuminate\Support\Facades\DB;

use App\Berth;
use App\Pier;


class BerthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $berth = Berth::where('boolDeleted',0)->get();
        $pier = Pier::where('boolDeleted',0)->get();
        return view('Berth.index')->with('berths',$berth);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pier = Pier::where('boolDeleted',0)->get();
        $order = Berth::find(DB::table('tblberth')->max('intBerthID'));

        return view('Berth.create')->with('piers',$pier);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Berth' => 'required'
        ]);
        $boolDeleted = 0;
        $Berth = new Berth;
        

        $Berth->intBPierID = $request->input('Pier');
        $Berth->timestamps = false;
        $Berth->strBerthName= $request->input('Berth');
        $Berth->boolDeleted = $boolDeleted;
        $Berth->save();

        return redirect('/berth')->with('success', 'Berth Successfully Added');
    }

    /**
     * 
     * 
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
    public function edit($intBerthID)
    {
        $berths = Berth::find($intBerthID);
        
        $pier = Pier::where('boolDeleted',0)->get();
        
        $berthID = $berths->intBPierID;
        $berthPier = Berth::find($intBerthID);
        
        return view('Berth.edit')->with('berths', $berths)->with('piers',$pier);

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
        $this->validate($request,[
            'Berth' => 'required'
        ]);
            
        $berth = Berth::find($id);
        $berth->timestamps = false;
        $berth->strBerthName= $request->input('Berth');
        $berth->intBPierID = $request->input('Pier');
        $berth->save();

        return redirect('/berth')->with('success', 'Berth Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($intBerthID)
    {
 
        $berth = Berth::findOrFail($intBerthID);
        
    }

    public function delete($intBerthID)
    {

        $berth = Berth::find($intBerthID);
        $berth->timestamps = false;
        $berth->boolDeleted = 1;
        $berth->save();

        return redirect('/berth')->with('success', 'Berth Successfully Deleted');
        
    }
}
