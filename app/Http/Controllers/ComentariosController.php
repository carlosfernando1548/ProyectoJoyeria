<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ComentariosModel;
use Illuminate\Support\Facades\DB;

class ComentariosController extends Controller
{
    function addComent(Request $req){
        $comentario = new ComentariosModel();

        $comentario->com_coment = $req->input("comentario");
        $comentario->cli_id = $req->session()->get("id");
        $comentario->pro_id = $req->input("id");

        $comentario->save();
        return redirect("productosdetalles?id=".$req->input("id"));
    }

    function getValidar(Request $req){
        $comentarios = DB::table("vw_comentarios")->where("com_estatus","!=",2)->get();

        return view("admin.validarComentarios", ["comentarios" => $comentarios]);
    }

    function aceptarComentario(Request $req){
        $id = $req->input('id');

        $com = ComentariosModel::find($id);

        $com->com_estatus = 1;

        $com->save();

        return redirect()->action("ComentariosController@getValidar"); 
    }

    function deleteComentario(Request $req){
        $id = $req->input('id');

        $com = ComentariosModel::find($id);

        $com->com_estatus = 2;

        $com->save();

        return redirect()->action("ComentariosController@getValidar"); 
    }
}
