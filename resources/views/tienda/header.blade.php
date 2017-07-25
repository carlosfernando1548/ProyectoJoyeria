<header id="header" class="header">
			
    <!-- Header Top
        ============================================= -->
        <div class="top-bar clearfix">
            <div class="container">
                <p class="contact-number">LLAME GRATIS 01-800-123-456</p>
                <ul class="clearfix">
                    <!--<li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>-->
                    @if(Session::get("id"))
                        <li><a href="{{url('administrador')}}">Mi Cuenta</a></li>
                        <li class="login-btn">
                            <a href="{{url('login/cerrar')}}">
                                <i class="icon-locklockerstreamline"></i>Cerrar Sesion
                            </a>
                        </li>
                    @else
                        <li class="login-btn">
                            <a href="{{url('login')}}">
                                <i class="icon-locklockerstreamline"></i>Login
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        
        
        <!-- Header Inner
        ============================================= -->
        <div class="header-inner clearrfix container">
            
            <a href="index.html" class="navbar-brand">
                <img src="{{URL::asset('templete/images/logo.png')}}" alt="" title=""></a>
            
            
            @if(Session::has("id"))
                <div class="shop-cart clearfix">
                    <a href="#." class="cart-control"><i class="icon-caddieshopshoppingstreamline"></i><span id="carritoProductos">0</span></a>
                    <div class="shop-cart-detail" >
                        <div id="detallesCarrito"></div>
                        <!--<div class="shop-cart-item clearfix">
                            <img src="{{URL::asset('templete/images/cart-item.jpg')}}" alt="">
                            <p>Leather Hand Gloves for Men<span>Quantity 3</span></p>
                        </div>-->
                        <div class="shop-cart-total clearfix">
                            SUBTOTAL
                            <span id="carritoSubtotal">$0</span>
                        </div>
                        <div class="shop-cart-buttons clearfix">
                            <a href="#." class="view-cart">Ver Carrito</a>
                            <a href="#." class="check-out">Pagar</a>
                        </div>
                    </div>
                </div>
            @endif
            
            <ul class="header-banners">
                <li>
                    <i class="icon-truck2"></i>
                    <p>Envios Gratis<span>
                            En Ordenes Arriba De $150</span></p>
                </li>
            </ul>
            
        </div>
        
        <!-- Primary Navigation
        ============================================= -->
        
        <nav class="navbar navbar-default">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
                                                                                                    
            <div class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav">
                <li><a href="{{url('')}}">Inicio</a></li>
                @foreach($categorias as $cat)
                    <li><a href="{{url('productos?cat=').$cat->cat_id}}">{{$cat->cat_nombre}}</a></li>
                @endforeach
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">pages <span class="caret"></span></a>
                    <ul class="dropdown-menu list-icon" role="menu">
                    <li><a href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a></li>
                    <li><a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a></li>
                    <li><a href="login-register.html"><i class="fa fa-angle-right"></i> Login / Register</a></li>
                    <li><a href="error404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                    <li><a href="products.html"><i class="fa fa-angle-right"></i> Products</a></li>
                    <li><a href="blog.html"><i class="fa fa-angle-right"></i> Blog</a></li>
                    <li><a href="blog-detail.html"><i class="fa fa-angle-right"></i> Blog Detail</a></li>
                    </ul>
                </li>
                <li class="dropdown mega-menu-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>
                    <div class="mega-menu">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-heading">Cloths</li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Suits & Blazer</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Shirts</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Jeans Pants</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Dress Pants</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Hoodies</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Hot Sweaters</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> T-Shirts</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-heading">Accessories</li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Shoes</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Glassess</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Men’s W
                                        ets</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Casual Watches</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Casual Watches</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Tie Clips & Cufflinks</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-heading">Undergarments</li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Underwear</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Socks</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Sleepwear</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> T-Shirts</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Bodysuits</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> CA Sports</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <img src="images/nav-banner.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown mega-menu-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <span class="caret"></span></a>
                    <div class="mega-menu">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-heading">Accessories</li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Shoes</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Glassess</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Men’s W
                                        ets</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Casual Watches</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Casual Watches</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Tie Clips & Cufflinks</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-heading">Cloths</li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Suits & Blazer</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Shirts</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Jeans Pants</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Dress Pants</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Hoodies</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Hot Sweaters</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> T-Shirts</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="dropdown-menu" role="menu">
                                    <li class="nav-heading">Undergarments</li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Underwear</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Socks</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Sleepwear</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> T-Shirts</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> Bodysuits</a></li>
                                    <li><a href="#."><i class="icon-angle-right"></i> CA Sports</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <img src="images/nav-banner.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">kids</a></li>
                <li><a href="#">lifestyle</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
                    <ul class="dropdown-menu list-icon" role="menu">
                    <li><a href="blog.html"><i class="fa fa-angle-right"></i> Blog</a></li>
                    <li><a href="blog-detail.html"><i class="fa fa-angle-right"></i> Blog Detail</a></li>
                    </ul>
                </li>
                <li><a href="#">find a store</a></li>-->
                </ul>
                <form class="navbar-form" role="search" action="{{url('productos/busqueda')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input name="keys" type="text" placeholder="Buscar...">
                    </div>
                    <button type="submit"><i class="icon-search4"></i></button>
                </form>
            </div>
            </div>
        </nav>
        
</header>