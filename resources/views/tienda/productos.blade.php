@extends("tienda.tienda")

@section("content")
<div class="products">
						
    <h2 class="text-center"><strong>{{$nombreCat}}</strong></h2>
    
    <div class="height50"></div>
    
    <ul class="clearfix list-unstyled">
        @forelse($productos as $pro)
            <li>
                <div class="product-bordered">
                    <div class="product-thumb">
                        <a href="{{url('productosdetalles?id=').$pro->pro_id}}"><img src="{{URL::asset('templete/images/shop/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="product-description clearfix">
                        <h3><a href="{{url('productosdetalles?id=').$pro->pro_id}}">{{$pro->pro_nombre}}</a></h3>
                        <p class="price">${{$pro->pro_costo}}</p>
                        <span class="double-border"></span>
                        @if(Session::has('id'))
                            <a href="#." onclick="agregarCarrito({{$pro->pro_id}})" class="product-cart-btn pull-left"><i class="icon-icons240"></i> Agregar Al Carrito</a>
                            <a href="#." onclick="agregarFavorito({{$pro->pro_id}})" class="product-detail-btn pull-right"><i class="fa fa-heart" aria-hidden="true" style="color:red"></i> </a>
                        @endif                        
                    </div>
                </div>
            </li>
        @empty
            <li>
                <div class="product-bordered">
                    <div class="product-thumb">
                        <a href="#"><img src="{{URL::asset('templete/images/shop/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="product-description clearfix">
                        <h3><a href="#.">SIN PRODUCTOS</a></h3>
                        <p class="price">LO SENTIMOS</p>
                        <span class="double-border"></span>
                    </div>
                </div>
            </li>
        @endforelse
    </ul>

</div>
@endsection

@section('scripts')
       
@endsection