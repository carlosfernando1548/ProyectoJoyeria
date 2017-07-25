<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoginAdminModel as users;
use App\CategoriasModel;
use App\ProductosModel;
use App\UsuariosModel;
use Session;

class LoginAdminController extends Controller
{
    function index(){
        $categorias = CategoriasModel::where("cat_visible", 1)->get();
        return view('login.login',  [
                                        "categorias" => $categorias
                                    ]);
    }

    function login(Request $req){
        $cliente = UsuariosModel::where("cli_correo", $req->input('mail'))
                                ->where("cli_pass", md5($req->input('pass')))
                                ->get();

        if(sizeof($cliente->toArray())>0){
            $req->session()->put("id" , $cliente[0]->cli_id );
            $req->session()->put("nombre" , $cliente[0]->cli_nombre );
            $req->session()->put("apellido" , $cliente[0]->cli_apellido );
            $req->session()->put("domicilio" , $cliente[0]->cli_domicilio );
            $req->session()->put("correo" , $cliente[0]->cli_correo );
            $req->session()->put("perfil" , $cliente[0]->cli_perfil );
            $req->session()->put("tipo" , $cliente[0]->cli_tipo );


            return redirect("administrador");
        }else{
            $alerta = [   "tipo" => "danger",
                        "msj" => "Usuario y/o contraseña incorrecta"
                    ];
            Session::flash("alerta", $alerta['msj']);
            Session::flash("tipo", $alerta['tipo']);
            return redirect("login");
        }
        
    }

    function logout(Request $request){
        $request->session()->flush();

        return redirect("/");
    }

    function registrar(Request $req){
        $usu = new UsuariosModel();

        $usu->cli_nombre = $req->input('name');
        $usu->cli_apellido = $req->input('last');
        $usu->cli_domicilio = $req->input('dom');
        $usu->cli_correo = $req->input('mail');
        $usu->cli_pass = md5($req->input('pass'));

        $usu->save();

        $req->session()->put("id" , $usu->cli_id );
        $req->session()->put("nombre" , $usu->cli_nombre );
        $req->session()->put("apellido" , $usu->cli_apellido );
        $req->session()->put("domicilio" , $usu->cli_domicilio );
        $req->session()->put("correo" , $usu->cli_correo );
        $req->session()->put("perfil" , $usu->cli_perfil );

        return redirect('administrador');
    }
}
