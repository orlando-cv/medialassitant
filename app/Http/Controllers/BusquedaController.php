<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    //
    public function index() {
        return view('vistas.busqueda');
    }

    public function store($request) {
        //Aqui va el codigo que
        return view('vistas.busqueda');
    }

    public function buscador(Request $request)
    {
        $data = ["success"=>false];

        if($request->ajax()){
            $lista = Paciente::where("nombre", "like", "%".$request->texto."%")->get();
            $data = [
                "success"=>true,
                "lista"=>$lista
            ];
        }

        return response()->json($data, 200);
    }
}
