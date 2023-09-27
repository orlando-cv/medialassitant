<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\RelacioncmController;
use App\Models\Relacioncm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('vistas.busqueda');
});

Route::get('/busqueda', [BusquedaController::class, 'index'])->name('busqueda');

Route::post('/buscador', [BusquedaController::class, 'buscador']);
Route::post('/cambiardatos', [ConsultaController::class, 'cambiardatos']);
Route::post('/medicamentoconsulta', [RelacioncmController::class, 'medicamentoconsulta']);

Route::get('/agregar-paciente', [PacienteController::class, 'index'])->name('paciente');
Route::post('/agregar-paciente', [PacienteController::class, 'store'])->name('paciente.store');

Route::get('/consulta', [ConsultaController::class, 'index'])->name('consulta');
Route::get('/consulta-paciente/{id}', [ConsultaController::class, 'consulta'])->name('consulta.paciente');
Route::get('/diagnostico/{idPaciente}', [ConsultaController::class, 'diagnostico'])->name('consulta.diagnostico');
Route::get('/pconsulta', [ConsultaController::class, 'primera'])->name('consulta.primera');
Route::get('/pconsulta/{id}', [ConsultaController::class, 'show'])->name('consulta.show');


Route::post('/pconsulta/', [ConsultaController::class, 'primerosDatos'])->name('consulta.primerdato');
Route::get('/consulta/{id}', [ConsultaController::class, 'show'])->name('consulta.show');

Route::post('/buscamed', [MedicamentoController::class, 'buscarMedicamento']);

Route::post('/agregarmed', [RelacioncmController::class, 'agregarMedicamento'])->name('relacion.agregarmed');
Route::delete('/eliminarmed/{id}', [RelacioncmController::class, 'destroy'])->name('relacion.destroy');