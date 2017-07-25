<div class="panel panel-color panel-inverse">
    <div class="panel-heading">
        <h3 class="panel-title">Productos</h3>
    </div>
    <div class="panel-body">
        <form action="" class="form-horizontal" method="GET">
            {{ csrf_field() }}
            <select name="cat" id="" class="form-control" onchange="this.form.submit()">
                @foreach( $categorias as $cat)
                    @if($cat->cat_id == $catSelect)
                        <option value="{{$cat->cat_id}}" selected>{{$cat->cat_nombre}}</option>
                    @else
                        <option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
                    @endif
                @endforeach
            </select>
        </form>
        <table class="table table-striped m-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Costo</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $pro)
                    <tr>
                        <td>{{$pro->pro_id}}</td>
                        <td>{{$pro->pro_nombre}}</td>
                        <td>{{$pro->pro_costo}}</td>
                        <td>{{$pro->pro_desc}}</td>
                        <td style="display: inline-flex;">
                            <form action="{{url('productos/deleteProd')}}" method="POST" style="margin-right:5px;">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$pro->pro_id}}">
                                <a href="#" onclick="$(this).closest('form').submit()">
                                    <i class="fa fa-times" style="cursor:pointer; color:red;"></i>                                    
                                </a>
                            </form>
                            <form action="" method="GET">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$pro->pro_id}}">
                                <a href="#" onclick="$(this).closest('form').submit()">
                                   <i class="fa fa-pencil" style="cursor:pointer; color:green;"></i>                                   
                                </a>
                            </form>                            
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <center>Sin Productos</center>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>