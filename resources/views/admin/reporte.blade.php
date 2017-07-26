@extends('layouts.body')

@section('content')
    <div class="row">
        <!--<div class="col-md-4">

        </div>-->
        <div class="col-md-12">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading">
                    <h3 class="panel-title">Gastos Del Mes</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped m-0">
                        <thead>
                            <tr>
                                <th>Ticket</th>
                                <th>Tarjeta</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($comprobante as $pro)
                                <tr>
                                    <td>{{$pro->co_id}}</td>
                                    <td>{{$pro->co_tarjeta}}</td>
                                    <td>${{$pro->total}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        <center>Sin Gastos</center>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection