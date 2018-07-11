@extends('Templates.masterTemplate')
    
@section('externalStylesheets')
    @include('Styles.dropdownStyles')
@endsection

@section('externalScripts')
    @include('Scripts.dropdownScripts')
@endsection    
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>
                    Employee
                <small class="ml-1 smCat">
                    Maintenance
                </small>
            </div>
        </h1>
    </section>
    <div class="addLayout">
        <div class="card animated bounceInLeft" >
            <div class="card-header">
                <span>
                    <a class="btnBack btn btn-lg btn-link float-left mt-1" data-toggle="tooltip"  title="Back" role="button">
                        <i class="ion-chevron-left custSize"></i>
                    </a>
                    <button class="btn btn-lg btn-link float-right" disabled></button>
                    <h3 class="text-center">ADD</h3>
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        {!! Form::open(['action' => ['EmployeesController@update',$employees->intEmployeeID], 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{Form::label('Surname','Surname')}}
                                        {{Form::text('Surname',$employees->strLName,['class'=>'form-control','id'=>'addPosition','placeholder' => 'Surname'])}}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        {{Form::label('First Name','First Name')}}
                                        {{Form::text('FirstName',$employees->strFName,['class'=>'form-control','id'=>'addPosition','placeholder' => 'First Name'])}}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        {{Form::label('Middle Name','Middle Name')}}
                                        {{Form::text('MiddleName',$employees->strMName,['class'=>'form-control','id'=>'addPosition','placeholder' => 'Middle Name'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {{Form::label('Positions','Position')}}
                                <select id="pierSelect" name="Position" class="form-control form-control-lg">
                                    @foreach($positions as $positions)
                                        <option id="type{{$positions->intPositionID}}" value="{{$positions->intPositionID}}">{{$positions->strPositionName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <!--<div class="form-group">
                                {{Form::label('Employee Type','Employee Type')}}
                                {{Form::text('Employee Type','',['class'=>'form-control','id'=>'addPosition','placeholder' => 'Employee Type'])}}
                            </div>-->
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Submit',['class' => 'btnAdd btn btn-primary float-right font-weight-bold'])}}
                        {!! Form::close() !!}    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripted')
    @include('Scripts.dropdownScripts')
    <script type="text/javascript">
        var eo = document.getElementById("maintenanceTree");
        var et = document.getElementById("employeesMenu");
        eo.className = "active";
        et.className = "active";
    </script>
@endsection
