<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    //
    function buscarMedicamento(Request $request) {
        // dd($request);
        $data = ["success"=>false];

        if($request->ajax()){
            $data = ["success"=>true];
            $lista = Medicamento::where("compuesto", "like", "%".$request->texto."%")->get(["id", "compuesto", "presentacion", "composicion", "via"]);
            $data = [
                "success"=>true,
                "lista"=>$lista
            ];
        }

        return response()->json($data, 200);
    }
}
