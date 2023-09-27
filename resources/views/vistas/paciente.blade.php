@extends('layouts.blanco')

@section('contenido')
    <div class="container-fluid cont-paciente">
        <div class="row fila-paciente">
            <div class="col-lg-6 col-paciente">
                <h1>AGREGAR PACIENTE</h1>
                <form action="{{route('paciente.store')}}" method="POST" class="" id="form">
                
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <label for="">Nombre:</label>
                                <input name="nombre" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('nombre') }}">
                            </div>
                        </div>
                        <div class="row">
                            <label for="">Fecha de nacimiento:</label>
                            <div class="col-lg-2">
                                <select name="dia" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Día</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select name="mes" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <input name="ano" class="form-control form-control-lg" type="text" placeholder="Año" aria-label=".form-control-lg example" value="{{ old('ano') }}">
                            </div>

                            <div class="col-lg-4 d-flex align-items-center">
                                <label class="sexo" for="">Sexo:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Hombre">
                                    <label class="form-check-label" for="inlineRadio1">H</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Mujer">
                                    <label class="form-check-label" for="inlineRadio2">M</label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="">Escolaridad:</label>
                                <select name="escolaridad" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Seleccione...</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Preparatoria">Preparatoria</option>
                                    <option value="Universidad">Universidad</option>
                                    <option value="NA">NA</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Ocupacion (opcional):</label>
                                <input name="ocupacion" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('ocupacion') }}">
                            </div>
                            <div class="col-lg-3">
                                <label for="">Estado Civil:</label>
                                <select name="estado_civil" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="" selected>Seleccione...</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Viudo">Viudo</option>
                                    <option value="Divorciado">Divorciado</option>
                                </select>
                            </div>
                        </div>
                        <div class="row fila-domicilio">
                            <div class="col-lg-10 col-domicilio">
                                <div class="container cont-domicilio">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <label for="">Domicilio: (Calle):</label>
                                            <input name="calle" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('calle') }}">
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">No:</label>
                                            <input name="num_ext" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('num_ext') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="">Int:</label>
                                            <input name="num_int" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('num_int') }}">
                                        </div>
                                        <div class="col-lg-8">
                                            <label for="">Col:</label>
                                            <input name="colonia" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('colonia') }}">
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">C.P.:</label>
                                            <input name="cp" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('cp') }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Ciudad:</label>
                                            <input name="ciudad" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('ciudad') }}">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Estado:</label>
                                            <input name="estado" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('estado') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 telefono">
                                <label for="">Telefono:</label>
                                <input name="telefono" class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" value="{{ old('telefono') }}">
                            </div>
                            <div class="col-lg-4 d-flex align-items-center">
                                <div class="form-check d-flex align-items-center">
                                    <input name="whatsapp" class="form-check-input check-whats" type="checkbox" value="true" id="flexCheckDefault">
                                    <i class="fa-brands fa-square-whatsapp"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center mb-5">
                                <button type="submit" id="agregar" onclick="agregarPaciente(event)" class="btn-agregar agregar">Agregar Paciente</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scrips')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.8/sweetalert2.min.js" integrity="sha512-psXTZ2xWy7Z7MW2eRz9w9RQJXrj35LZKCWRjLsvqPPidnhdU3RU9Qgf6YeO0cdVA9IrqYUEyDbYnJLHm2gKGRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<script>
    
    // function agregarPaciente(ev) {

    //     ev.preventDefault();

    //     // alert('esto si funciona')
    //     Swal.fire {
    //         title: "Funciona"
    //     };
    // }

</script>
    
@endsection