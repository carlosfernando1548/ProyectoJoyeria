<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CarritoModel;
use App\CategoriasModel;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    function getCarrito(Request $req){
        $idSesion = $req->session()->get("id");
        $productos = DB::table("vw_carrito")->where("cli_id", $idSesion)->get();

        $subtotal = 0;
        $contador = 0;

        foreach($productos as $p){
            $subtotal += floatval($p->total);
            $contador++;
        }

        $carrito =  [
                        "productos" => $productos,
                        "subtotal" => $subtotal,
                        "contador" => $contador
                    ];

        return response()->json($carrito);

    }

    function addCarrito(Request $req){
        if($req->session()->has("id")){
            $idSesion = $req->session()->get("id");
            $carrito = new CarritoModel();
            $carrito->pro_id = $req->input("id");
            $carrito->cli_id = $idSesion;
            
            $carrito->save();
            $res = true;
        }else{
            $res = false;
        }

        return response()->json($carrito);
    }

    function addFavorito(Request $req){
        $proId = $req->input('id');

        DB::table('favoritos')->insert(
            ['pro_id' => $proId, 'cli_id' => $req->session()->get("id")]
        );

        return response()->json(true);
    }

    function verCarrito(Request $req){
        $idSesion = $req->session()->get("id");
        $productos = DB::table("vw_carrito")->where("cli_id", $idSesion)->get();

        $subtotal = 0;
        $contador = 0;

        foreach($productos as $p){
            $subtotal += floatval($p->total);
            $contador++;
        }

        $carrito =  [
                        "productos" => $productos,
                        "subtotal" => $subtotal,
                        "contador" => $contador
                    ];

        $categorias = CategoriasModel::where('cat_visible', 1)->get();
        
        return view("tienda.carrito", ["carrito" => $carrito, "categorias" => $categorias]);
    }

    function deletePro(Request $req){
        $id = $req->input("id");
       
        DB::table("carrito")->where("cli_id", $req->session()->get("id"))
                            ->where("pro_id", $id)
                            ->where("car_estado",0)
                            ->update(["car_estado" => 2]);

        return redirect()->action("CarritoController@verCarrito");
    }
}
