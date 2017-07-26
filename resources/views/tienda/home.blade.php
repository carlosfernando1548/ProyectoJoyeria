@extends('tienda.tienda')

@section('content')
<section id="featured-products" class="no-padding relative" style="margin-top:25px;">					
    <h2>Productos En Inventario</h2>
    
    <div class="featured-products-filter-nav">
        <div class="filter active" data-filter=".today">Hoy</div>
        <div class="filter" data-filter=".weekly">Semana</div>
        <div class="filter" data-filter=".monthly">Mes</div>
    </div>
    
    <div id="Container-featured-products" class="container">
        <ul class="product-column portfolio-four-column clearfix">
            @foreach($productos as $pro)
                <li class="mix today">
                    <div class="product">
                        <a href="{{url('productos?cat=').$pro->cat_id}}"><img src="{{$pro->pro_imagen!='noimage'?url('storage/'.$pro->pro_imagen):URL::asset('templete/images/featured-products/today/1.jpg')}}
" alt=""></a>
                        <h4>{{$pro->pro_nombre}}</h4>
                        <p>{{$pro->pro_desc}}</p>
                        <p class="price">${{$pro->pro_costo}}</p>
                    </div>
                </li>
            @endforeach

            @foreach($productos as $pro)
                <li class="mix weekly">
                    <div class="product">
                        <a href="products.html"><img src="{{URL::asset('templete/images/featured-products/today/1.jpg')}}" alt=""></a>
                        <h4>{{$pro->pro_nombre}}</h4>
                        <p>{{$pro->pro_desc}}</p>
                        <p class="price">${{$pro->pro_costo}}</p>
                    </div>
                </li>
            @endforeach

            @foreach($productos as $pro)
                <li class="mix monthly">
                    <div class="product">
                        <a href="products.html"><img src="{{URL::asset('templete/images/featured-products/today/1.jpg')}}" alt=""></a>
                        <h4>{{$pro->pro_nombre}}</h4>
                        <p>{{$pro->pro_desc}}</p>
                        <p class="price">${{$pro->pro_costo}}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    
    
</section>

<section id="new-products" class="no-padding-bottom">
    
    <h2>Nuevos Productos</h2>
    <br>
    
    <div class="three-item-carousel arrows owl-carousel">

        @forelse($newProductos as $prod)
            <div class="product">
                <a href="#."><img src="{{URL::asset('templete/images/new-products/1.jpg')}}" alt=""></a>
                <h4>{{$prod->pro_nombre}}</h4>
                <p>{{$pro->pro_desc}}</p>
                <p class="price">${{$prod->pro_costo}}</p>
            </div>
        @empty
            <center><h1>Sin productos</h1></center>
        @endforelse
    
    </div>
    
</section>

<div class="row">
    <div class="col-md-6">
        <div class="available-widget">
            <i class="icon-icons20"></i>
            <p>Estamos a todas horas<span>Simplemente comunicate a cualquier hora</span></p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="place-order-widget">
            <i class="icon-icons202"></i>
            <p> Ordenes donde sea<span></span><b class="tag">01-800-123-456</b></p>
        </div>
    </div>
</div>		
@endsection