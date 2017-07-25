<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\UsuariosModel;
use Session;

class UsuariosController extends Controller
{
    function reportes(){
        return view('admin.reporte');
    }

    function index(Request $req){
        $id = $req->input('id')==""?0:$req->input('id');

        $tipos = DB::table('tipo_cliente')->where("tc_visible",1)->get();

        $query = DB::table('clientes')->where("cli_visible", 1);

        if($id!=0){
            $query->where("cli_id" , $id);
        }

        $clientes = $query->get();

        $oneCli = null;
        $tipoSelect = 1;
        if($id!=0){
            $oneCli = $clientes[0];
            $tipoSelect = $clientes[0]->cli_tipo;
        }
        
        return view('admin.clientes',   [
                                            "clientes" => $clientes,
                                            "id" => $id,
                                            "tipos" => $tipos,
                                            "oneCli" => $oneCli,
                                            "tipoSelect" => $tipoSelect
                                        ]);
    }

    function addCliente(Request $req){
        $id = $req->input('id')==""?0:$req->input('id');

        if($id!=0){
            $usu = UsuariosModel::find($id);
            
            Session::flash("tipo","success");
            Session::flash("alerta","Usuario Actualizado");
        }else{
            $usu = new UsuariosModel();
            
            Session::flash("tipo","success");
            Session::flash("alerta","Usuario Registrado Correctamente");
        }

        if($req->has("pass")){
             $usu->cli_pass = md5($req->input('pass'));
        }      

        $usu->cli_nombre = $req->input('name');
        $usu->cli_apellido = $req->input('last');
        $usu->cli_domicilio = $req->input('dom');
        $usu->cli_correo = $req->input('mail');        
        $usu->cli_tipo = $req->input('tipo');

        $usu->save();

        if($req->session()->get("tipo")!="1"){
            return redirect()->action("UsuariosController@perfil");
        }else{
            return redirect()->action("UsuariosController@index");
        }
    }

    function deleteClie(Request $req){
        $prod = UsuariosModel::find($req->input('id'));

        $prod->cli_visible = 0;

        $prod->save();

        return redirect()->action("UsuariosController@index");

    }

    function perfil(Request $req){
        $id = $req->session()->get("id");
        $cliente = UsuariosModel::find($id);
        $oneCli = $cliente;
        $tipos = DB::table("tipo_cliente")->where("tc_visible",1)->get();
        return view("admin.perfil", [
                                        "id" => $id,
                                        "oneCli" => $oneCli,
                                        "tipos" => $tipos,
                                        "tipoSelect" => $cliente->cli_tipo,
                                        "cambioPerfil" => true
                                    ]);
    }

    function favoritos(Request $req){
        $id = $req->session()->get("id");

        $favoritos = DB::table("favoritos as f")
                    ->select("p.pro_id" , "p.pro_nombre")
                    ->join("productos as p","p.pro_id","=","f.pro_id")
                    ->where("f.cli_id",$id)
                    ->where("f.fav_estatus",1)
                    ->get();

        return view("admin.favoritos",["favoritos" => $favoritos]);        
    }

    function deleteFav(Request $req){
        $id = $req->session()->get("id");

       DB::table("favoritos")
                    ->where("pro_id" , $req->input("id"))
                    ->where("cli_id" , $id)
                    ->update(["fav_estatus" => 0]);

        return redirect()->action("UsuariosController@favoritos");        
    }
}
