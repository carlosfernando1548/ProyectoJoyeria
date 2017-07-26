<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PagosModel;
use Illuminate\Support\Facades\DB;

class PagosController extends Controller
{
    function pagar(Request $req){
        $pago = new PagosModel();

        $pago->co_tarjeta = $req->input("numTarjeta"); 
        $pago->cli_id = $req->session()->get("id");    

        $pago->save();

        $id = $pago->co_id;

        echo  $id;

        DB::table("carrito")->where("cli_id", $req->session()->get("id"))
                            ->where("car_estado", 0)
                            ->update(
                                        [
                                            "car_estado" => 1,
                                            "co_id" => $id                                        
                                        ]);

        return redirect("administrador");
    }
}
