@extends("tienda.tienda")

@section("content")
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Tu Compras</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Cantidad</th>
                                <th>Producto</th>
                                <th>Precio Unitario</th>
                                <th>Importe</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito['productos'] as $c)
                                <tr>
                                    <td>{{$c->cantidad}}</td>
                                    <td>{{$c->pro_nombre}}</td>
                                    <td>${{$c->pro_costo}}</td>
                                    <td>${{$c->total}}</td>
                                    <td>
                                        <a href="{{url('carrito/deletePro?id=').$c->pro_id}}"><i class="fa fa-times" style="color:red;"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"></td>
                                <td>Total</td>
                                <td>${{$carrito['subtotal']}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>            
        </div>
    </div>
@endsection