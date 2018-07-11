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
                        {!! Form::open(['action' => 'BerthController@store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('Berth','Berth')}}
                                {{Form::text('Berth','',['class'=>'form-control','id'=>'addPosition','placeholder' => 'Berth'])}}
                            </div>    
                            <div class="form-group">
                                <select id="pierSelect" name="Pier" class="form-control form-control-lg">
                                    @foreach($piers as $piers)
                                        <option id="type{{$piers->intPierID}}" value="{{$piers->intPierID}}">{{$piers->strPierName}}</option>
                                    @endforeach
                                </select>
                            
                            </div>
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
@endsection
