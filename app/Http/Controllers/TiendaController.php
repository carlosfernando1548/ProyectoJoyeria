<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriasModel;
use App\ProductosModel;

class TiendaController extends Controller
{
    public function index(){
        $categorias = CategoriasModel::where("cat_visible", 1)->get();
        $newProductos = ProductosModel::where("pro_visible", 1)->get();
        $productos = ProductosModel::where("pro_visible", 1)->limit(4)->get();

        return view("tienda.home",[
                                        "categorias" => $categorias,
                                        "productos" => $productos,
                                        "newProductos" => $newProductos,
                                        "slider" => true
                                    
                                    ]);
    }
    
}
