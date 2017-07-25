@extends('layouts.body')

@section('content')
    <div class="row">
        @if($id!=0)
            <div class="col-md-6 col-md-offset-3">
                @include('admin.newCliente')
            </div>            
        @else
            <div class="col-md-5">
                @include('admin.newCliente')            
            </div>
            <div class="col-md-7">
                @include('admin.listadoCliente')
            </div>
        @endif        
    </div>
@endsection