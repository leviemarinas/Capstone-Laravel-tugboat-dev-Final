@extends('Templates.masterTemplate')


@section('externalStylesheets')
    @include('Styles.maintenanceTablesStyles')
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
        <div class="detLayout mt-3">
            <a href="/berth/create">
                <button class="detAdd btn btn-primary text-center border-dark bounceIn animated">
                    Add
                </button>
            </a>
            <br>
            <br>
            <table class="detailedTable table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th style="width:70%;" class="text-center">Position</th>
                        <th class="noSortAction text-center">Action</th>
                    </tr>
                </thead>
                @if(count($berths)>0)
                    @foreach($berths as $berths)
                        <tbody>
                            <tr class="text-center">
                            <td>{{$berths->strBerthName}}</td>
                                <td>
                                    <div class="ml-1 mr-1">
                                        <a href="/berth/{{$berths->intBerthID}}/edit">
                                                <button class="editItem btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit" role="button">
                                                    <i class="miniIcon fas fa-edit custSize"></i>
                                                </button>
                                        </a>
                                    
                                    <a href="/berth/{{$berths->intBerthID}}/delete">
                                        <button class="delItem btn btn-sm btn btn-danger" data-toggle="tooltip" title="Delete">
                                            <i class="miniIcon fas fa-trash custSize"></i>
                                        </button>
                                    </a>
                                        
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                @endif
            </table>
        </div>
    </section>       
@endsection


@section('scripted')
<script>
    var eo = document.getElementById("maintenanceTree");
    var et = document.getElementById("berthMenu");

    eo.className = "active";
    et.className = "active";
</script>
@endsection