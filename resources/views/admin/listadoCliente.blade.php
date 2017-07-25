<div class="panel panel-color panel-inverse">
    <div class="panel-heading">
        <h3 class="panel-title">Clientes</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped m-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Domicilio</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes as $c)
                    <tr>
                        <td>{{$c->cli_id}}</td>
                        <td>{{$c->cli_nombre." ".$c->cli_apellido}}</td>
                        <td>{{$c->cli_domicilio}}</td>
                        <td>{{$c->cli_correo}}</td>
                        <td>{{$c->cli_tipo=="1"?"Administrador":"Cliente"}}</td>
                        <td style="display: inline-flex;">
                            <form action="{{url('clientes/deleteCliente')}}" method="POST" style="margin-right:5px;">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$c->cli_id}}">
                                <a href="#" onclick="$(this).closest('form').submit()">
                                    <i class="fa fa-times" style="cursor:pointer; color:red;"></i>                                    
                                </a>
                            </form>
                            <form action="" method="GET">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$c->cli_id}}">
                                <a href="#" onclick="$(this).closest('form').submit()">
                                   <i class="fa fa-pencil" style="cursor:pointer; color:green;"></i>                                   
                                </a>
                            </form>                            
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <center>Sin Clientes</center>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>