<div class="panel panel-color panel-inverse">
    <div class="panel-heading">
        @if($id!=0)
            <h3 class="panel-title">Editar Producto</h3>
        @else
            <h3 class="panel-title">Agregar Producto</h3>
        @endif        
    </div>
    <div class="panel-body">
        <form action="{{url('productos/addProductos')}}" class="form-horizontal" method="POST" enctype="multipart/form-data" autocomplete="off">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$id}}">
            <div class="form-group">
                <label for="" class="control-label col-md-2">Categoria</label>
                <div class="col-md-10">
                    <select name="cat" id="" class="form-control">
                        @foreach( $categorias as $cat)
                            @if($cat->cat_id == $catSelect)
                                <option value="{{$cat->cat_id}}" selected>{{$cat->cat_nombre}}</option>
                            @else
                                <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-2">Nombre</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="text" class="form-control" name="name" value="{{$oneProd->pro_nombre}}" placeholder="Nombre">
                    @else
                        <input type="text" class="form-control" name="name" value="" placeholder="Nombre">
                    @endif                    
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-2">Descripcion</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="text" class="form-control" name="desc" value="{{$oneProd->pro_desc}}" placeholder="Descripcion">
                    @else
                        <input type="text" class="form-control" name="desc" value="" placeholder="Nombre">
                    @endif                    
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-2">Costo</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="number" step="0.01" name="costo" value="{{$oneProd->pro_costo}}" class="form-control" placeholder="Costo">
                    @else
                        <input type="number" step="0.01" name="costo" class="form-control" placeholder="Costo">
                    @endif                    
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-2">Imagen</label>
                <div class="col-md-10">
                    <input type="file" name="prodImg" class="form-control" placeholder="Seleccione Un Archivo">
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
        </form>
    </div>
</div>