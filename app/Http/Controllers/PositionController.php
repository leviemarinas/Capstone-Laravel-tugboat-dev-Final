<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Position::where('boolDeleted',0)->get();
        return view('Position.index')->with('positions',$position);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Position.create');
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
            'Position' => 'required',
        ]);

        $position = new Position;
        $position->timestamps = false;
        $position->strPositionName = $request->input('Position');
        $position->boolDeleted = 0;
        $position->save();

        return redirect('/position')->with('success', 'Position Added');
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
    public function edit($intPositionID)
    {
        $position = Position::find($intPositionID);
        return view('Position.edit')->with('positions',$position);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $intPositionID)
    {
        $this->validate( $request, [
            'Position' => 'required',
        ]);

        //
        $position = Position::find($intPositionID);
        $position->timestamps = false;
        $position->strPositionName = $request->input('Position');
        $position->save();
        return redirect('/position')->with('success', 'Position Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Complete Deletion
    public function destroy($id)
    {
        //
    }
    //Soft Deletion
    public function delete($intPositionID)
    {
        $position = Position::find($intPositionID);
        $position->timestamps = false;
        $position->strPositionName= 1;
        $position->save();
        return redirect('/position')->with('error', 'Position Deleted');
    }
}
