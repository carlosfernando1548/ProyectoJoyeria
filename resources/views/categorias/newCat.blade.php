<div class="panel panel-color panel-inverse">
    <div class="panel-heading">
        @if($id!=0)
            <h3 class="panel-title">Editar Categoria</h3>
        @else
            <h3 class="panel-title">Agregar Categoria</h3>
        @endif        
    </div>
    <div class="panel-body">
        @if($id!=0)
            <form action="{{url('categorias/editCat')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$info->cat_id}}">
        @else
            <form action="{{url('categorias/addCategoria')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
        @endif        
            {{ csrf_field() }}
            <div class="form-group">
                <label for="" class="control-label col-md-2">Nombre</label>
                <div class="col-md-10">
                    @if($id!=0)
                        <input type="text" class="form-control" value="{{$info->cat_nombre}}" name="name" placeholder="Nombre">
                    @else
                        <input type="text" class="form-control" name="name" placeholder="Nombre">
                    @endif                        
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Guardar</button>
        </form>
    </div>
</div>