<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Relacioncm;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    //
    public function index($idPaciente) {
        // return view('vistas.consulta');

        if (!empty($idPaciente)) {
            
            $paciente = Paciente::where('id', $idPaciente)->get();
            $consultas = Consulta::where('paciente_id', $idPaciente)->latest('id')->get();

            $consulta = $consultas[0];
            return view('vistas.pconsulta', compact('paciente', 'consulta'));
        }
        else {
            $paciente = Paciente::latest('id')->first();
            return view('vistas.consulta', compact('paciente'));
            // dd($consulta);
            // $consulta = Consulta::find($idConsulta);
            // $medicamentos = Relacioncm::where('consulta_id', $idConsulta)->where('paciente_id', $consulta->paciente_id)->whereDate('created_at', $today)->get();
            // $paciente = $paciente = Paciente::find($consulta->paciente_id);
        }
    }

    public function consulta($idPaciente) {
        // return view('vistas.consulta');

        if (!empty($idPaciente)) {
            
            $paciente = Paciente::where('id', $idPaciente)->get();
            $consultas = Consulta::where('paciente_id', $idPaciente)->latest('id')->get();

            $consulta = $consultas[0];
            return view('vistas.consulta', compact('paciente', 'consulta'));
        }
        else {
            $paciente = Paciente::latest('id')->first();
            return view('vistas.consulta', compact('paciente'));
            // dd($consulta);
            // $consulta = Consulta::find($idConsulta);
            // $medicamentos = Relacioncm::where('consulta_id', $idConsulta)->where('paciente_id', $consulta->paciente_id)->whereDate('created_at', $today)->get();
            // $paciente = $paciente = Paciente::find($consulta->paciente_id);
        }
    }

    function diagnostico($idPaciente) {
        $paciente = Paciente::where('id', $idPaciente)->get();
        $consultasPaciente = Consulta::where('paciente_id', $idPaciente)->orderBy('created_at', 'desc')->get();
        // dd($consultasPaciente);
        $consultas = json_encode($consultasPaciente);
        return view('vistas.diagnosticos', compact('consultasPaciente', 'paciente'));
        // return view('vistas.diagnosticos', compact('consultas'));
    }

    public function primera($idConsulta = null) {
        if (empty($paciente) && empty($consulta)) {
            $paciente = Paciente::latest('id')->first();
            return view('vistas.pconsulta', compact('paciente'));
        }

        if ($idConsulta) {
            $consulta = Consulta::find($idConsulta);
            $medicamentos = Relacioncm::where('consulta_id', $idConsulta)->where('paciente_id', $consulta->paciente_id)->whereDate('created_at', $today)->get();
            $paciente = $paciente = Paciente::find($consulta->paciente_id);
            return view('vistas.pconsulta', compact('paciente', 'consulta', '$medicamentos'));
        }        
    }

    public function show($idPaciente) {
        // $idConsulta

        if (!empty($idPaciente)) {
            
            $paciente = Paciente::where('id', $idPaciente)->get();
            $consultas = Consulta::where('paciente_id', $idPaciente)->latest('id')->get();

            $consulta = $consultas[0];
            return view('vistas.pconsulta', compact('paciente', 'consulta'));
        }
        else {
            $paciente = Paciente::latest('id')->first();
            return view('vistas.pconsulta', compact('paciente'));
            // dd($consulta);
            // $consulta = Consulta::find($idConsulta);
            // $medicamentos = Relacioncm::where('consulta_id', $idConsulta)->where('paciente_id', $consulta->paciente_id)->whereDate('created_at', $today)->get();
            // $paciente = $paciente = Paciente::find($consulta->paciente_id);
        }
    }

    public function segunda($idPaciente) {
        $paciente = Paciente::find('idPaciente');
        $consultas = Consulta::where('paciente_id', $idPaciente)->get();

        // dd($consultas);
        return view('vistas.consulta', compact('consultas')); 
    }

    public function primerosDatos(Request $request) {
        $paciente = Paciente::latest('id')->first();
        $sesion = intval($request->no_sesion);
        $idPaciente = $request->paciente_id;
        $consulta = Consulta::where('sesion', '=', $sesion)->where('paciente_id', '=', $idPaciente)->first();
        
        // $existente = Consulta::find(request)

        // dd($consulta);
        if($consulta){
            $consulta->padecimiento = $request->padecimientos;
            $consulta->antecedentes = $request->antecedentes;
            $consulta->alergias = $request->alergias;
            $consulta->peso = $request->peso;
            $consulta->estatura = $request->estatura;
            $consulta->temperatura = $request->temperatura;
            $consulta->presion = $request->presion;
            $consulta->frecuencia_cardiaca = $request->fcardiaca;
            $consulta->glucosa = $request->glucosa;

            $consulta->update();
            return view('vistas.pconsulta', compact('paciente', 'consulta'));
            // $idConsulta = Consulta::latest('id')->first();
            // return redirect()->route('consulta.show', $idConsulta);
        } else {
            $no_sesion = intval($request->no_sesion);
            $consulta = new Consulta;
            $consulta->sesion = $no_sesion;
            $consulta->padecimiento = $request->padecimientos;
            $consulta->antecedentes = $request->antecedentes;
            $consulta->alergias = $request->alergias;
            $consulta->peso = $request->peso;
            $consulta->estatura = $request->estatura;
            $consulta->temperatura = $request->temperatura;
            $consulta->presion = $request->presion;
            $consulta->frecuencia_cardiaca = $request->fcardiaca;
            $consulta->glucosa = $request->glucosa;
            $consulta->paciente_id = $request->paciente_id;

            $consulta->save();

            return view('vistas.pconsulta', compact('paciente', 'consulta'));
        }
    }

    public function actualizarConsulta(Request $request) {
        dd('se esta actulizando');
    }

    // public function agregarMedicamento(Request $request) {
    //     $paciente = Paciente::find($request->paciente_id);
    //     $consulta = Consulta::where('sesion', $request->sesion)->where('id', $request->consulta_id)->where('paciente_id', $request->paciente_id)->first();

    //     // dd($request);

    //     $relacion = new Relacioncm();
    //     $relacion->medicamento = $request->medicamento;
    //     $relacion->dosis = $request->dosis;
    //     $relacion->frecuencia = $request->frecuencia;
    //     $relacion->indicaciones = $request->indicaciones;
    //     $relacion->paciente_id = $request->paciente_id;
    //     $relacion->consulta_id = $request->consulta_id;
    //     $relacion->medicamento_id = $request->medicamento_id;

    //     $relacion->save();

    //     $today = Carbon::now()->format('Y-m-d');

        

    //     $medicamentos = Relacioncm::where('consulta_id', $request->consulta_id)->where('paciente_id', $request->paciente_id)->whereDate('created_at', $today)->get();

    //     // dd($medicamentos);

    //     return view('vistas.pconsulta', compact('paciente', 'consulta', 'medicamentos'));
    //     // return redirect('/pconsulta')->with($request->consulta_id);
    // }

    

    function cambiardatos(Request $request) {

       
        // $fecha = Carbon::createFromFormat('m/d/Y', $request->fecha)->format('Y-m-d');
        $consulta = Consulta::whereDate('created_at', $request->fecha)->where('paciente_id', $request->id )->get();
        

        return response(json_encode($consulta), 200);
    }
}
