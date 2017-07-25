@extends("layouts.body")

@section("content")
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-color panel-inverse">
                <div class="panel-heading">
                    <h3 class="panel-title">Comentarios</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped m-0">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Comentario</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($comentarios as $c)
                                <tr>
                                    <td>{{$c->pro_nombre}}</td>
                                    <td>{{$c->com_coment}}</td>
                                    <td>{{$c->nombre}}</td>
                                    <td>
                                        @if($c->com_estatus == "0")
                                            Pendiente
                                        @else
                                            Publicado
                                        @endif
                                    </td>                                    
                                    <td style="display: inline-flex;">
                                        @if($c->com_estatus == "0")
                                            <form action="{{url('comentarios/aceptarComentario')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{$c->com_id}}">
                                                <a href="#" onclick="$(this).closest('form').submit()">
                                                <i class="fa fa-check" style="cursor:pointer; color:green;"></i>                                   
                                                </a>
                                            </form>
                                        @endif
                                        <form action="{{url('comentarios/deleteComentario')}}" method="POST" style="margin-right:5px;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$c->com_id}}">
                                            <a href="#" onclick="$(this).closest('form').submit()">
                                                <i class="fa fa-times" style="cursor:pointer; color:red;"></i>                                    
                                            </a>
                                        </form>                                                                    
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <center>Sin Comentarios</center>
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