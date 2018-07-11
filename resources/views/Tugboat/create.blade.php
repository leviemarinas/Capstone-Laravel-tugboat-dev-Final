@extends('Templates.masterTemplate')

@section('content')
    <section class="section">
            <h1 class="section-header">
                <div>
                    Tugboat
                    <small class="ml-1 smCat">
                            Maintenance
                    </small>
                </div>
            </h1>
        @include('Tugboat.card')
    </section>
@endsection

@section('outside')
    @include('Tugboat.summary')
@endsection

@section('scripted')
    @include('Tugboat.tugboatScripts')
@endsection