<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <base href="" />
	<!-- Basic Page Needs

     ================================================== -->
	 
	 <meta charset="utf-8">
	 
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	 <link rel="icon" type="image/png" href="{{URL::asset('templete/images/favicon.png')}}">
	
     <title>Fajar</title>
    
     <meta name="description" content="">
    
     <meta name="keywords" content="">
    
     <meta name="author" content="">

	 
	 <!-- Mobile Specific Metas
    
     ================================================== -->
    
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    
     <meta name="format-detection" content="telephone=no">
	 
	 
    <!-- CSS
    
     ================================================== -->
	
	
	<!-- website styling -->
	<link rel="stylesheet" href="{{URL::asset('templete/css/style.cs')}}s">
	
	<!-- Revolution slider styling -->
	<link rel="stylesheet" href="{{URL::asset('templete/css/settings.css')}}">

	<!-- bootstrap -->
	<link rel="stylesheet" href="{{URL::asset('templete/css/bootstrap.css')}}">	
	
	 
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- SCRIPTS
    
     ================================================== -->
	
	<script src="{{URL::asset('templete/js/modernizr-2.6.2.min.js')}}"></script>
	
	<!-- jQuery (necessary for JavaScript plugins) 
	============================================= -->
	<script src="{{URL::asset('templete/js/jquery.min.js')}}"></script>
	
	<script src="{{URL::asset('templete/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{URL::asset('templete/js/jquery.themepunch.revolution.min.js')}}"></script>

	@yield("css")
	
	</head>
    <body>
		
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			
			<!-- Header
			============================================= -->
			@include('tienda.header')
			
			
			
			<!-- Slider
			============================================= -->
			@isset($slider)
				<section id="slider" class="no-padding main-banner">
					
					<div class="tp-banner-container">
						<div class="tp-banner">
							<ul>
								
								<li data-transition="fade" data-slotamount="1" data-masterspeed="1500">
									<!-- MAIN IMAGE -->
									<img src="{{URL::asset('http://www.rodicar.es/v_portal/inc/imagen.asp?f=slider551.jpg&w=1900&h=663&c=2')}}"  alt=""  data-bgfit="" data-bgposition="left top" data-bgrepeat="no-repeat">
									
									<!-- LAYER NR. 1 -->
									<div class="tp-caption slide1-heading lfb skewtoleft"
										data-x="center"
										data-y="190"
										data-speed="2000"
										data-start="500"
										data-easing="Power4.easeOut"
										data-endspeed="400"
										data-endeasing="Power1.easeIn"
										style="z-index: 11">Joyeria Diamante Rojo
									</div>
									
									<!-- LAYER NR. 2 -->
									<div class="tp-caption slide1-text lfb skewtoleft"
										data-x="center"
										data-y="280"
										data-speed="2000"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endspeed="400"
										data-endeasing="Power1.easeIn"
										style="z-index: 11">EMPRESA TOTALMENTE MEXICANA
									</div>
									
									<!-- LAYER NR. 3 -->
									<div class="tp-caption slide1-btn lfb skewtoleft"
										data-x="center"
										data-y="340"
										data-speed="2000"
										data-start="1300"
										data-easing="Power4.easeOut"
										data-endspeed="400"
										data-endeasing="Power1.easeIn"
										style="z-index: 11"><a href="products.html" class="btn btn-bordered">COMPRAR AHORA</a>
									</div>
								</li>
								
								<li data-transition="slide" data-slotamount="2" data-masterspeed="1500">
									<!-- MAIN IMAGE -->
									<img src="{{URL::asset('http://www.rodicar.es/v_portal/inc/imagen.asp?f=slider551.jpg&w=1900&h=663&c=2')}}"  alt=""  data-bgfit="" data-bgposition="left top" data-bgrepeat="no-repeat">

									<!-- LAYER NR. 1 -->
									<div class="tp-caption slide2-date skewfromleftshort customout"
										data-x="80"
										data-y="130"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="300"
										data-start="1600"
										data-easing="Back.easeOut"
										data-endspeed="500"
										data-endeasing="Power4.easeIn"
										data-captionhidden="on"
										style="z-index: 7;">2017
									</div>
									
									<!-- LAYER NR. 2 -->
									<div class="tp-caption slide2-heading customin customout"
										data-x="80"
										data-y="300"
										data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="600"
										data-start="1400"
										data-easing="Power3.easeInOut"
										data-splitin="chars"
										data-splitout="chars"
										data-elementdelay="0.08"
										data-endelementdelay="0.08"
										style="z-index: 11">Joyeria Diamante Rojo
									</div>
									
									<!-- LAYER NR. 3 -->
									<div class="tp-caption slide2-sprtr customin customout"
										data-x="130"
										data-y="370"
										data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="600"
										data-start="1400"
										data-easing="Power2.easeInOut"
										data-splitin="chars"
										data-splitout="chars"
										data-elementdelay="0.08"
										data-endelementdelay="0.08"
										style="z-index: 11">--------------------------------
									</div>
									
									<!-- LAYER NR. 4 -->
									<div class="tp-caption slide2-text customin customout"
										data-x="80"
										data-y="410"
										data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="600"
										data-start="1400"
										data-easing="Power3.easeInOut"
										data-splitin="chars"
										data-splitout="chars"
										data-elementdelay="0.08"
										data-endelementdelay="0.08"
										style="z-index: 11">TODO POR USTEDES
									</div>
									
								</li>
							</ul>
						</div>
					</div>
					
				</section>
			@endisset
			
			
			<div class="container">
			
				@yield('content')			
			
			</div>
			
			<div class="height50"></div>
			
			
			<!-- Footer
			============================================= -->
			@include("tienda.footer")
			
			
		</div>
	
	
	
	
	<!-- bootstrap 
	============================================= -->
	<script src="{{URL::asset('templete/js/bootstrap.min.js')}}"></script>

	<!-- External plugins
	============================================= -->
	<script src="{{URL::asset('templete/js/plugins.js')}}"></script>
	
	<!-- scripts 
	============================================= -->
	<script src="{{URL::asset('templete/js/scripts.js')}}"></script>

	@yield('scripts')
	<script>
         $(document).ready(function(e){
            getCarrito();
         });

        var arrayCarrito = [];

        var agregarCarrito = function(id){
            var formdata = new FormData();
            formdata.append("_token", "{{ csrf_token() }}");
            formdata.append("id", id);
            $.ajax({
                url: '{{url("carrito/addProdCarrito")}}',
                type: "POST",
                dataType: "JSON",
                data: formdata,
                processData: false,
                contentType: false,
                cache : false,
                success: function(data) {
                    getCarrito();                                
                },
                error: function() {
                    console.log('error');
                }
            });
        }

        var getCarrito = function(){
            var formdata = new FormData();
            formdata.append("_token", "{{ csrf_token() }}");
            $.ajax({
                url: '{{url("carrito/getCarrito")}}',
                type: "POST",
                data:formdata,
                dataType: "JSON",
                processData: false,
                contentType: false,
                cache : false,
                success: function(data) {

                    arrayCarrito = data;

                    /*data.map(function(c,index){
                        arrayCarrito.push(c);
                    });*/

                    pintarCarrito();
                    
                },
                error: function() {
                    console.log('error');
                }
            });
        }

		var agregarFavorito = function(id){
            var formdata = new FormData();
            formdata.append("_token", "{{ csrf_token() }}");
            formdata.append("id", id);
            $.ajax({
                url: '{{url("carrito/addFavorito")}}',
                type: "POST",
                dataType: "JSON",
                data: formdata,
                processData: false,
                contentType: false,
                cache : false,
                success: function(data) {
                    alert("FAVORITO AGREGADO");                                
                },
                error: function() {
                    console.log('error');
                }
            });
        }

        var pintarCarrito = function(){
            var html = arrayCarrito['productos'].map(function(c,index){
                return (`<div class="shop-cart-item clearfix" style="padding-top: 15px;">
                            <img src="{{URL::asset('templete/images/cart-item.jpg')}}" alt="">
                            <p>${c.pro_nombre}<span>Cantidad ${c.cantidad}</span></p>
                        </div>`)
            });

            $('#carritoProductos').html(arrayCarrito['contador']);
            $('#carritoSubtotal').html("$"+arrayCarrito['subtotal']);

            $('#detallesCarrito').html(html);
        }


    </script>
	<script>

	(function () {
		"use strict";
			
			
			/* ------------------------------------------------------------------------ 
			   MAIN BANNER [revolution slider]
			------------------------------------------------------------------------ */
			var revapi;
			
			revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1300,
				startheight:663,
				hideThumbs:10

			});
			
			
	})(jQuery);
	
	
	</script>
	
	
	</body>
</html>
	