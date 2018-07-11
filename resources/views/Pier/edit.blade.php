@extends('Templates.masterTemplate')

@section('externalStylesheets')
@endsection

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>
                    Berth
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
                        {!! Form::open(['action' => ['PierController@update',$pier->intPierID], 'method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('Pier','Pier')}}
                                {{Form::text('PierName',$pier->strPierName, ['class'=>'form-control','id'=>'addPosition'])}}
                            </div>
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Update',['class' => 'btnAdd btn btn-primary float-right font-weight-bold'])}}
                        {!! Form::close() !!}    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripted')
@endsection
