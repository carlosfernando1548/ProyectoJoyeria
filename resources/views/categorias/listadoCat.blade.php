<div class="panel panel-color panel-inverse">
    <div class="panel-heading">
        <h3 class="panel-title">Categorias</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped m-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categorias as $cat)
                    <tr>
                        <td>{{$cat->cat_id}}</td>
                        <td>{{$cat->cat_nombre}}</td>
                        <td style="display: inline-flex;">
                            <form action="{{url('categorias/deleteCat')}}" method="POST" style="margin-right:5px;">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$cat->cat_id}}">
                                <a href="#" onclick="$(this).closest('form').submit()">
                                    <i class="fa fa-times" style="cursor:pointer; color:red;"></i>                                    
                                </a>
                            </form>
                            <form action="" method="GET">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$cat->cat_id}}">
                                <a href="#" onclick="$(this).closest('form').submit()">
                                   <i class="fa fa-pencil" style="cursor:pointer; color:green;"></i>                                   
                                </a>
                            </form>                            
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3"><center>Sin Categorias</center></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>