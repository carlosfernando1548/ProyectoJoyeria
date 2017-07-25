@extends('layouts.body')

@section('content')    
    <div class="row">
        @if($id!=0)
            <div class="col-md-6 col-md-offset-3">
                @include('productos.newProducto')
            </div>            
        @else
            <div class="col-md-5">
                @include('productos.newProducto')            
            </div>
            <div class="col-md-7">
                @include('productos.listado')
            </div>
        @endif        
    </div>
@stop