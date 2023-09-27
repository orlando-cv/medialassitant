<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Relacioncm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RelacioncmController extends Controller
{
    //
    public function agregarMedicamento(Request $request) {
        $paciente = Paciente::find($request->paciente_id);
        $consulta = Consulta::where('sesion', $request->sesion)->where('id', $request->consulta_id)->where('paciente_id', $request->paciente_id)->first();

        // dd($request);

        $relacion = new Relacioncm();
        $relacion->medicamento = $request->medicamento;
        $relacion->dosis = $request->dosis;
        $relacion->frecuencia = $request->frecuencia;
        $relacion->indicaciones = $request->indicaciones;
        $relacion->paciente_id = $request->paciente_id;
        $relacion->consulta_id = $request->consulta_id;
        $relacion->medicamento_id = $request->medicamento_id;

        $relacion->save();

        $today = Carbon::now()->format('Y-m-d');

        

        $medicamentos = Relacioncm::where('consulta_id', $request->consulta_id)->where('paciente_id', $request->paciente_id)->whereDate('created_at', $today)->get();

        // dd($medicamentos);

        return view('vistas.pconsulta', compact('paciente', 'consulta', 'medicamentos'));
        // return redirect('/pconsulta')->with($request->consulta_id);
    }

    public function destroy($id) {
        $today = Carbon::now()->format('Y-m-d');
        $medicamento = Relacioncm::find($id);
        $idConsulta = $medicamento->consulta_id;
        $idPaciente = $medicamento->paciente_id;
        $medicamento->delete();

        $medicamentos = Relacioncm::where('consulta_id', $idConsulta)->where('paciente_id', $idPaciente)->whereDate('created_at', $today)->get();
        $paciente = $paciente = Paciente::find($idPaciente);
        $consulta = $consulta = Consulta::find($idConsulta);

        // return redirect()->back();
        return view('vistas.pconsulta', compact('paciente', 'consulta', 'medicamentos'));
        // return redirect('/pconsulta')->with('idPaciente', 'idConsulta');
    }

    public function medicamentoconsulta(Request $request){

        $relacion = Relacioncm::where('consulta_id', $request->id)->get();

        return response(json_encode($relacion), 200);
        // return $request->id;
    }
}
