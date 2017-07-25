@extends("tienda.tienda")

@section("content")
<div class="sub-page-padding clearfix">				
    <div class="login-register-tabs" id="login-register-tabs">
        <ul class="resp-tabs-list clearfix">
            <li><a href="#.">Iniciar</a></li>
            <li><a href="#.">Registrar</a></li>
        </ul>
        <div class="resp-tabs-container">
            <div>
                <div class="login-register-form">
                    <form name="login_form" id="login_form" action="login/login" method="POST">
                        {{ csrf_field() }}
                        @if(Session::has('alerta'))
                            <div class="alert alert-{{Session::get('tipo')}} alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                {{Session::get('alerta')}}
                            </div>
                        @endif
                        <label>Correo Electronico *</label>
                        <input type="text" id="name" name="mail" class="validate[required]" data-prompt-position="topLeft:0">
                        <label>Contraseña *</label>
                        <input type="password" id="password" name="pass" class="validate[required]" data-prompt-position="topLeft:0">
                        <input type="submit" class="btn btn default btn-fill" value="Ingresar">
                        <div class="clearfix"></div>
                    </form>
                                                            
                </div>
            </div>
            
            <div>
                <div class="login-register-form">
                    <form name="" id="register_form" action="login/registrar" method="POST">
                        {{ csrf_field() }}
                        <label>Nombre *</label>
                        <input type="text"  name="name"  required data-prompt-position="topLeft:0">
                        
                        <label>Apellido *</label>
                        <input type="text"  name="last"  required data-prompt-position="topLeft:0">
                        
                        <label>Domicilio *</label>
                        <input type="text"  name="dom" required  data-prompt-position="topLeft:0">
                        
                        <label>Correo Electronico *</label>
                        <input type="email" style="margin-bottom:30px; width:100%;" name="mail"  required data-prompt-position="topLeft:0">
                        
                        <label>Contraseña *</label>
                        <input type="password" name="pass"  required data-prompt-position="topLeft:0">
                        
                        <input type="submit" class="btn btn default btn-fill" value="Registrar">
                        <div class="clearfix"></div>
                    </form>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection