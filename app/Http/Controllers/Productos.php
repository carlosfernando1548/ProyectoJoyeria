<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\CategoriasModel;
use App\ProductosModel;
use App\ComentariosModel;

class Productos extends Controller
{
    public function getProductos(Request $req){

        if (!$req->session()->exists('id')) {
            return redirect("/");
        }

        $id = $req->input("id")==""?0:$req->input("id");
        
        $cat = $req->input("cat")==""?0:$req->input("cat");

        $categorias = CategoriasModel::where('cat_visible', 1)->get();
        
        $query = DB::table('productos as p')->select("p.*")->join("categorias as c","c.cat_id", "=", "p.cat_id");

        if($cat!=0){
            $query->where("c.cat_id",$cat);
        }

        if($id!=0){
            $query->where("p.pro_id", $id);
        }

        $query->where("p.pro_visible",1);

        $productos = $query->get();

        $oneProd = null;
        if($id!=0){
            $cat =  $productos[0]->cat_id;
            $oneProd = $productos[0];
        }

        return view('productos/productos',["categorias" => $categorias,
                                            "productos" => $productos,
                                            "catSelect" => $cat,
                                            "id" => $id,
                                            "oneProd" => $oneProd,
                                            "nombreSesion" => $req->session()->get("nombre")
                                            ]);
    } 

    public function addProductos(Request $datos){
        
        $id = $datos->input("id")==""?0:$datos->input("id");

        if($id==0){
            $prod = new ProductosModel();
        }else{
            $prod = ProductosModel::find($id);
        }       
        
        if ($datos->hasFile('prodImg')){
            $fileName = $datos->prodImg->store('productos');;
            $prod->pro_imagen = $fileName;
        }

        $prod->pro_nombre = $datos->input('name');
        $prod->pro_desc = $datos->input('desc');
        $prod->pro_costo = $datos->input('costo');
        $prod->cat_id = $datos->input("cat");
        $prod->save();

        return redirect()->action("Productos@getProductos");
    }   


    function deleteProd(Request $req){
        $prod = ProductosModel::find($req->input('id'));

        $prod->pro_visible = 0;

        $prod->save();

        return redirect()->action("Productos@getProductos");

    }

    function tiendaProductosByCat(Request $req){
        $categorias = CategoriasModel::where('cat_visible', 1)->get();

        $query = DB::table('productos as p')->select("p.*")
                                            ->join("categorias as c","c.cat_id", "=", "p.cat_id")
                                            ->where("p.pro_visible", 1)
                                            ->where("p.cat_id", $req->input("cat"));

        $productos = $query->get();


        foreach($categorias as $cat){
            if($cat->cat_id==$req->input("cat")){
                $nombreCat = $cat->cat_nombre;
                break;
            }
        }

        return view("tienda.productos", [
                                            "categorias" => $categorias,
                                            "productos" => $productos,
                                            "nombreCat" => $nombreCat
                                        ]);
    }

    function buscador(Request $req){
        $keys = $req->input('keys');

        $categorias = CategoriasModel::where('cat_visible', 1)->get();
        
        $productos = ProductosModel::where("pro_visible", 1)
                                    ->where("pro_nombre", "like", "%".$keys."%")
                                    ->get();

        return view("tienda.productos", [
                                            "categorias" => $categorias,
                                            "productos" => $productos,
                                            "nombreCat" => "BUSCADOR"
                                        ]);
    }

    function tiendaProductosById(Request $req){
        $id = $req -> input("id");

        if($id==""){
            return redirect("/");
        }

        $categorias = CategoriasModel::where('cat_visible', 1)->get();

        $producto = ProductosModel::find($id);

        $comentarios = DB::table("vw_comentarios")
                            ->where("com_estatus",1)
                            ->where("pro_id",$id)
                            ->get();

        return view("productos.productosdetalles",  [
                                                        "categorias" => $categorias,
                                                        "producto" => $producto,
                                                        "comentarios" => $comentarios
                                                    ]);
    }
}


