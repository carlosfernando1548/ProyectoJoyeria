<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriasModel;

class CategoriasController extends Controller
{
    function index(Request $req){
        $id = $req->input("id")==""?0:$req->input("id");

        $info = null;
        if($id!=0){
            $info = CategoriasModel::find($id);
        }

        $categorias = CategoriasModel::where('cat_visible', 1)->get();

        return view("categorias/categorias",["categorias" => $categorias,
                                             "info" => $info,
                                             "id" => $id                                            ]);
    }

    function addCategoria(Request $req){
        $cat = new CategoriasModel();

        $cat->cat_nombre = $req->input('name');

        $cat->save();

        return redirect()->action("CategoriasController@index");     
    }

    function deleteCat(Request $req){
        $cat = CategoriasModel::find($req->input('id'));

        $cat->cat_visible = 0;

        $cat->save();

        return redirect()->action("CategoriasController@index");

    }

    function editCat(Request $req){
        $cat = CategoriasModel::find($req->input('id'));

        $cat->cat_nombre = $req->input('name');

        $cat->save();

        return redirect()->action("CategoriasController@index");
    }
}
