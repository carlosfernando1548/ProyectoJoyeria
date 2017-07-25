@extends('layouts.body')

@section("content")
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading">
                    <h3 class="panel-title">Favoritos</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped m-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($favoritos as $c)
                                <tr>
                                    <td>{{$c->pro_id}}</td>
                                    <td>{{$c->pro_nombre}}</td>
                                    <td style="display: inline-flex;">
                                        <form action="{{url('administrador/deleteFav')}}" method="POST" style="margin-right:5px;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$c->pro_id}}">
                                            <a href="#" onclick="$(this).closest('form').submit()">
                                                <i class="fa fa-times" style="cursor:pointer; color:red;"></i>                                    
                                            </a>
                                        </form>                           
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <center>Sin Favoritos</center>
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