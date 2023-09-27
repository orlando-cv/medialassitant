<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

// use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    //
    public function index()
    {
        return view('vistas.paciente');
    }

    public function store(Request $request)
    {
        $fecha = strtotime($request->input('dia').'-'.$request->input('mes').'-'.$request->input('ano'));
        $fecha_nacimiento = date('Y-m-d', $fecha);
        $whatsapp = filter_var($request->whatsapp, FILTER_VALIDATE_BOOLEAN);
        $telefono = intval($request->telefono);

        $paciente = new Paciente;
        $paciente->nombre = $request->nombre;
        $paciente->fecha = $fecha_nacimiento;
        $paciente->sexo = $request->sexo;
        $paciente->escolaridad = $request->escolaridad;
        $paciente->ocupacion = $request->ocupacion;
        $paciente->estado_civil = $request->estado_civil;
        $paciente->calle = $request->calle;
        $paciente->num_ext = $request->num_ext;
        $paciente->num_int = $request->num_int;
        $paciente->colonia = $request->colonia;
        $paciente->cp = $request->cp;
        $paciente->ciudad = $request->ciudad;
        $paciente->estado = $request->estado;
        $paciente->telefono = $telefono;
        $paciente->whatsapp = $whatsapp;
        
        $paciente->save();

        // $pacienteAConsultar = Paciente::latest('id')->first();
        return redirect()->route('consulta.primera')->withSuccess('Paciente agregado');
        // withSuccess('Paciente agregado');

    }

   
}
