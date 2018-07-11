<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employees;
use App\Position;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employees::where('boolDeleted', 0)->get();
        return view('Employees.index')->with('employees', $employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::where('boolDeleted',0)->get();
        $employee = Employees::where('boolDeleted',0)->get();
        return view('Employees.create')->with('positions',$position)->with('employees',$employee);
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
            'Surname' => 'required',
            'FirstName' => 'required',
        ]);

        $employee = new Employees;
        $employee->timestamps = false;
        $employee->intEPositionID = $request->input('Position');
        $employee->strLName = $request->input('Surname');
        $employee->strFName = $request->input('FirstName');
        $employee->strMName = $request->input('Middle Name');
        $employee->enumEmpType = $request->input('Employee Type');
        $employee->boolDeleted = 0;
        $employee->save();

        return redirect('/employees')->with('success', 'Employee Added');
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
    public function edit($intEmployeeID)
    {
        $employee = Employees::find($intEmployeeID);
        $position = Position::where('boolDeleted',0)->get();
        return view('Employees.edit')->with('employees', $employee)->with('positions',$position);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $intEmployeeID)
    {
        $this->validate( $request, [
            'Surname' => 'required',
            'FirstName' => 'required',
        ]);

        $employee = Employees::find($intEmployeeID);
        $employee->timestamps = false;
        
        $employee->intEPositionID = $request->input('Position');
        $employee->strLName = $request->input('Surname');
        $employee->strFName = $request->input('FirstName');
        $employee->strMName = $request->input('MiddleName');
        $employee->save();

        return redirect('/employees')->with('success','Employee Updated');
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
    public function delete($intEmployeeID)
    {
        $employees = Employees::find($intEmployeeID);
        $employees->timestamps = false;
        $employees->boolDeleted = 1;
        $employees->save();

        return redirect('/employees')->with('success', 'Employee Successfully Deleted');
    }
}
