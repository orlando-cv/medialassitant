@extends('layouts.azul')

@section('contenido')
    
    <main>
                    
        {{-- @yield('historial') --}}

        {{-- @dd($paciente) --}}

        <div class="container-fluid cont-consulta">
            <div class="row fila-consulta">
                <div class="col-lg-6 col-consulta">
                    <h1 class="titulo-consulta">HISTORIAL</h1>
                </div>
            </div>
        </div>
    
        <div class="container-fluid cont-datos-paciente">
            <div class="row fila-datos-paciente">
                <div class="col-lg-3 col-datos-paciente">
                    <h2>{{$paciente[0]->nombre}}</h2>
                </div>
                <div class="col-lg-3 col-datos-paciente d-flex align-items-center">
                    <label for="">Fecha</label>
                    <form action="/cambiardatos" method="POST" id="form1">
                        @csrf
                        <input type="text" name:"idPaciente" id="idPaciente" value="{{ $paciente[0]->id }}" style="visibility:hidden">
                        <select id="selectFecha" class="form-select" aria-label="Default select example">
                            @foreach ($consultasPaciente as $consulta)
                                <option value="{{$consulta->created_at}}">{{$consulta->created_at->format('d/m/Y')}}</option>
                            @endforeach
                            {{-- <option selected>23/04/2023</option>
                            <option value="2">13/12/2022</option>
                            <option value="3">16/08/2022</option> --}}
                        </select>
                    </form>
                </div>
            </div>
    
            <div class="row fila-datos">
                <div class="col-lg-2 col-datos">
                    <?php
                        $nacimiento = new DateTime($paciente[0]->fecha);
                        $ahora = new DateTime(date("Y-m-d"));
                        $edad = $ahora->diff($nacimiento)->format("%y");
                    ?>
                        <p>Edad: <span><?php echo $edad ?> años</span></p>
                    @if ($paciente[0]->sexo = "Hombre")
                        <p>Sexo: <span>H</span></p>
                    @else
                        <p>Sexo: <span>M</span></p>
                    @endif
                    <p id="">Peso: <span>{{$consultasPaciente[0]->peso}}</span></p>
                </div>
                <div class="col-lg-2 col-datos">
                    <p>Escolaridad: <span>{{$paciente[0]->escolaridad}}</span></p>
                    @if ($paciente[0]->ocupacion = "")
                        <p>Ocupación: <span>--</span></p>
                    @else
                        <p>Ocupación: <span>{{$paciente[0]->ocupacion}}</span></p>
                    @endif
                    <p id="">Estatura: <span>{{$consultasPaciente[0]->estatura}}</span></p>
                </div>
            </div>
            <div class="row fila-ultima-consulta">
                <div class="col-lg-3 col-ultima-consulta">
                    <h2>Ultima Consulta</h2>
                </div>
                <div class="col-lg-3 col-ultima-consulta">
                    <h2 class="no-sesiones" id="noSesion">Numero de sesión: <span>{{$consultasPaciente[0]->sesion}}</span></h2>
                </div>
            </div>
            <div class="row fila-datos-generales">
                <div class="col-lg-5 col-datos-generales">
                    <p id="padecimiento">Padecimiento: <span>{{$consultasPaciente[0]->padecimiento}}</span></p>
                    {{-- <p>Tratamientos: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p> --}}
                    <p id="alergias">Alergias: <span>{{$consultasPaciente[0]->alergias}}</span></p>
                    <p id="antecedentes">Antecedentes: <span>{{$consultasPaciente[0]->antecedentes}}</span></p>
                    <p id="medicamentos">Medicamentos: <span></span></p>
                    <ul id="lista-medicamentos">
                        {{-- Aqui se pondran los medicamentos --}}
                    </ul>
                    {{-- <p>Otros: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p> --}}
                </div>
            </div>
        </div>

        <div class="contenedor-btn d-flex justify-content-end">
            <a href="{{ route('consulta.paciente', $paciente[0]->id)}}" class="agregar-consulta">Agregar Consulta</a>
        </div>

    </main>

    

    <script>
        // const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        // selectFecha.addEventListener("change", e=>{
        //     // console.log(e.target.value);
        //     var texto = e.target.value;
        //     fetch("/cambiardatos", {
        //         method:"post",
        //         body:JSON.stringify({texto: texto}),
        //         headers: {
        //             'X-Requested-With': 'XMLHttpRequest',
        //             'Content-Type': 'application/json',
        //             "X-CSRF-Token": csrfToken
        //         }
        //     }).then(response=>{
        //         return response.json();
        //     })
        // })
        
    </script>
    
@endsection

