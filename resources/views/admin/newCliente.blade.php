<div class="panel panel-color panel-inverse">
    <div class="panel-heading">
        @if(isset($cambioPerfil))
            <h3 class="panel-title">Perfil</h3>            
        @elseif($id!=0)
            <h3 class="panel-title">Editar Cliente</h3>
        @else
            <h3 class="panel-title">Agregar Cliente</h3>
        @endif        
    </div>
    <div class="panel-body">
        <form action="{{url('clientes/addCliente')}}" class="form-horizontal" method="POST" enctype="multipart/form-data" autocomplete="off">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$id}}">
            <div class="form-group">
                <label for="" class="control-label col-md-2">Nombre</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="text" class="form-control" name="name" value="{{$oneCli->cli_nombre}}" placeholder="Nombre">
                    @else
                        <input type="text" class="form-control" name="name" value="" placeholder="Nombre">
                    @endif                    
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-2">Apellido</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="text" class="form-control" name="last" value="{{$oneCli->cli_apellido}}" placeholder="Apellido">
                    @else
                        <input type="text" class="form-control" name="last" value="" placeholder="Apellido">
                    @endif                    
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-2">Domicilio</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="text" class="form-control" name="dom" value="{{$oneCli->cli_domicilio}}" placeholder="Domicilio">
                    @else
                        <input type="text" class="form-control" name="dom" value="" placeholder="Domicilio">
                    @endif                    
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-2">Correo Electronico</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="email" class="form-control" name="mail" value="{{$oneCli->cli_correo}}" placeholder="Correo">
                    @else
                        <input type="email" class="form-control" name="mail" value="" placeholder="Correo">
                    @endif                    
                </div>
            </div>
            @if($id==0 || isset($cambioPerfil))
                <div class="form-group">
                    <label for="" class="control-label col-md-2">Contraseña</label>
                    <div class="col-md-10">
                        @if($id!=0 )
                            <input type="password" step="0.01" name="pass" value="{{$oneCli->cli_pass}}" class="form-control" placeholder="****">
                        @else
                            <input type="password" step="0.01" name="pass" class="form-control" placeholder="****">
                        @endif                    
                    </div>
                </div>
            @endif
            <div class="form-group">
                <label for="" class="control-label col-md-2">Tipo</label>
                <div class="col-md-10">
                    <select name="tipo" id="" class="form-control">
                        @foreach($tipos as $t)
                            @if($t->tc_id == $tipoSelect)
                                <option selected value="{{$t->tc_id}}">{{$t->tc_nombre}}</option>
                            @else
                                <option value="{{$t->tc_id}}">{{$t->tc_nombre}}</option>
                            @endif
                        @endforeach
                    </select>                  
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
        </form>
    </div>
</div>