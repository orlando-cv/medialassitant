@extends('layouts.azul')

@section('contenido')

<main>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            {{-- Aqui va la primera parte de la pagina de consulta --}}
            <div class="carousel-item active">
                <div class="container-fluid segunda-parte">                        
                        <div class="row">
                            {{-- Aqui va la parte de los sintomas y datos generales --}}
                            <div class="col-6">
                                <div class="container">
                                    <div class="row fila-datos-paciente">
                                        <div class="col-lg-12 col-datos-paciente">
                                            <h2 class="titulo-segunda-parte">{{ $paciente->nombre }}</h2>
                                        </div>
                                        <div class="col-lg-5 col-datos">
                                            <p>Edad: <span>34</span></p>
                                            @if ($paciente->sexo == 'Hombre')
                                                <p>Sexo: <span>H</span></p>
                                            @endif
                                            @if ($paciente->sexo == 'Mujer')
                                                <p>Sexo: <span>M</span></p>
                                            @endif
                                            <p>Escolaridad: <span>{{ $paciente->escolaridad }}</span></p>
                                        </div>
                                        <div class="col-lg-6 col-datos">
                                            <p>Ocupación: <span>{{ $paciente->ocupacion }}</span></p>
                                            <p>Peso: <span>--</span></p>
                                            <p>Estatura: <span>--</span></p>
                                        </div>
                                    </div>

                                    <form action="{{ route("consulta.primerdato") }}" method="POST">
                                        @csrf

                                        @dd($consulta)

                                        @if (empty($consulta))
                                            {{-- @dd($consulta->padecimiento) --}}
                                            <div class="row fila-consulta d-flex justify-content-between">
                                                <div class="col-lg-12 titulo-consulta">
                                                    <h2 class="titulo-segunda-parte">Nueva Consulta:</h2>
                                                </div>
                                                <div class="col-lg-5 d-flex align-items-center fecha-consulta">
                                                    <label for="">Fecha:</label>
                                                    <input class="form-control" type="text" value="{{ date('d-m-Y') }}" disabled readonly>
                                                </div>
                                                <div class="col-lg-5 d-flex align-items-center justify-content-end no-consulta">
                                                    <label for="no_sesion">No. Sesión:</label>
                                                    <input class="form-control" type="text" value="1" readonly name="no_sesion" id="no_sesion">
                                                </div>
                                            </div>
                                            <div class="ocultar">
                                                <input class="form-control w-75 input-oculto" type="text" name="paciente_id" id="paciente_id" value="{{ $paciente->id }}">
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-12">
                                                    <label for="padecimientos">Padecimiento</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="300" name="padecimientos" id="padecimientos" value={{old('padecimientos')}}></textarea>
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-12">
                                                    <label for="antecedentes">Antecedentes:</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="300" name="antecedentes" id="antecedentes" value={{old('antecedentes')}}></textarea>
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-12 d-flex align-items-center">
                                                    <label for="alergias">Alergias:</label>
                                                    <input class="form-control w-100" type="text" name="alergias" id="alergias" value={{old('alergias')}}>
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="peso">Peso:</label>
                                                    <input class="form-control" type="text" name="peso" id="peso" value={{old('peso')}}>
                                                    {{-- <span class="input-group-text" id="basic-addon2">Kg</span> --}}
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="estatura">Estatura:</label>
                                                    <input class="form-control" type="text" name="estatura" id="estatura" value={{old('estatura')}}>
                                                    {{-- <span class="input-group-text" id="basic-addon2">Mts</span> --}}
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="temperatura">Temp:</label>
                                                    <input class="form-control" type="text" name="temperatura" id="temperatura" value={{old('temperatura')}}>
                                                    {{-- <span class="input-group-text" id="basic-addon2">°</span> --}}
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="presion">Presión:</label>
                                                    <input class="form-control" type="text" name="presion" id="presion" value={{old('presion')}}>
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="">Frec. Cardiaca:</label>
                                                    <input class="form-control" type="text" name="fcardiaca" id="fcardiaca" value={{old('fcardiaca')}}>
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="">Glucosa:</label>
                                                    <input class="form-control" type="text" name="glucosa" id="glucosa" value={{old('glucosa')}}>
                                                </div>
                                            </div>                                        
                                        @else
                                            <div class="row fila-consulta d-flex justify-content-between">
                                                <div class="col-lg-12 titulo-consulta">
                                                    <h2 class="titulo-segunda-parte">Nueva Consulta:</h2>
                                                </div>
                                                <div class="col-lg-5 d-flex align-items-center fecha-consulta">
                                                    <label for="">Fecha:</label>
                                                    <input class="form-control" type="text" value="{{ date('d-m-Y') }}" disabled readonly>
                                                </div>
                                                <div class="col-lg-5 d-flex align-items-center justify-content-end no-consulta">
                                                    <label for="no_sesion">No. Sesión:</label>
                                                    <input class="form-control" type="text" value="1" readonly name="no_sesion" id="no_sesion">
                                                </div>
                                            </div>
                                            <div class="ocultar">
                                                <input class="form-control w-75 input-oculto" type="text" name="paciente_id" id="paciente_id" value="{{ $paciente->id }}">
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-12">
                                                    <label for="padecimientos">Padecimiento</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="300" name="padecimientos" id="padecimientos">{{ $consulta->padecimiento }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-12">
                                                    <label for="antecedentes">Antecedentes:</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="300" name="antecedentes" id="antecedentes">{{ $consulta->antecedentes }}</textarea>
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-12 d-flex align-items-center">
                                                    <label for="alergias">Alergias:</label>
                                                    <input class="form-control w-100" type="text" name="alergias" id="alergias" value="{{ $consulta->alergias }}">
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="peso">Peso:</label>
                                                    <input class="form-control" type="text" name="peso" id="peso" value="{{ $consulta->peso }}">
                                                    {{-- <span class="input-group-text" id="basic-addon2">Kg</span> --}}
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="estatura">Estatura:</label>
                                                    <input class="form-control" type="text" name="estatura" id="estatura" value="{{ $consulta->estatura }}">
                                                    {{-- <span class="input-group-text" id="basic-addon2">Mts</span> --}}
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="temperatura">Temp:</label>
                                                    <input class="form-control" type="text" name="temperatura" id="temperatura" value="{{ $consulta->temperatura }}">
                                                    {{-- <span class="input-group-text" id="basic-addon2">°</span> --}}
                                                </div>
                                            </div>
                                            <div class="row fila-datos-consulta">
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="presion">Presión:</label>
                                                    <input class="form-control" type="text" name="presion" id="presion" value="{{ $consulta->presion }}">
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="">Frec. Cardiaca:</label>
                                                    <input class="form-control" type="text" name="fcardiaca" id="fcardiaca" value="{{ $consulta->frecuencia_cardiaca }}">
                                                </div>
                                                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                    <label for="">Glucosa:</label>
                                                    <input class="form-control" type="text" name="glucosa" id="glucosa" value="{{ $consulta->glucosa }}">
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row fila-datos-consulta">
                                            <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                                <button id="btnGuardar" class="btn btn-guardar" type="submit">Guardar</button>
                                                <button id="btnImprimir" class="btn btn-imprimir">Imprimir Receta</button>
                                            </div>
                                        </div>
                                    </form> 

                                </div>
                            </div>
                           
                            {{-- Aqui va la parte de agregar los medicamentos --}}
                            <div class="col-6">
                                <div class="container">
                                    <h2 class="titulo-segunda-parte">Tratamientos:</h2>
                                    <div class="row fila-tratamientos">
                                        <form action="{{ route('relacion.agregarmed') }}" method="POST">
                                            @csrf
                                            <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                                <label for="medicamento">Medicamento:</label>
                                                <input class="form-control w-75" type="text" name="medicamento" id="medabuscar" value="{{ old('medicamento') }}">
                                            </div>
                                            <div class="col-lg-12 lista-medicamentos" id="listaMedPadre">
                                                <ul class="d-block" id="listaMedicamentos" class="list-group" style="overflow: hidden;"></ul>
                                            </div>
                                            {{-- <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                                <label for="">Presentación:</label>
                                                <input class="form-control w-75" type="text" name="" id="">
                                            </div> --}}
                                            <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                                <label for="dosis">Dosis:</label>
                                                <input class="form-control w-75" type="text" name="dosis" id="dosis" value="{{ old('dosis') }}">
                                            </div>
                                            <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                                <label for="frecuencia">Frecuencia:</label>
                                                <input class="form-control w-75" type="text" name="frecuencia" id="frecuencia" value="{{ old('frecuencia') }}">
                                            </div>
                                            <div class="col-lg-12 tratamientos">
                                                <label for="indicaciones">Indicaciones:</label>
                                                <textarea class="form-control" name="indicaciones" id="indicaciones" rows="3" maxlength="300" value="{{ old('indicaciones') }}"></textarea>
                                            </div>
                                            {{-- ocultar
                                            input-oculto --}}
                                            <div class="ocultar">
                                                <input class="form-control w-75 input-oculto" type="text" name="medicamento_id" id="medicamento_id" value="">
                                                <input class="form-control w-75 input-oculto" type="text" name="sesion" id="sesion" value="1">
                                                @if (empty($consulta))
                                                    <input class="form-control w-75 input-oculto" type="text" name="consulta_id" id="consulta_id" value="">
                                                @else
                                                    <input class="form-control w-75 input-oculto" type="text" name="consulta_id" id="consulta_id" value="{{$consulta->id}}">
                                                @endif
                                                <input class="form-control w-75 input-oculto" type="text" name="paciente_id" value="{{$paciente->id}}">
                                            </div>
                                            <div class="col-lg-12 tratamientos d-flex justify-content-center">
                                                <button type="submit" class="agregar-tratamiento" id="btnMedicamentos">Agregar Tratamiento</button>
                                            </div>
                                    </form>
                                    </div>
                                    <div class="row d-flex justify-content-center fila-tratamientos tabla-tratamientos">
                                        <div class="col-lg-12">
                                            <div class="scroll-bg">
                                                <div class="scroll-div">
                                                    @if (empty($medicamentos))
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Medicamento</th>
                                                                    <th scope="col">Eliminar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="resulmed" class="table-group-divider">
                                                                <tr>
                                                                    <td colspan="2" style="text-align: center; color: #c0c0c0">Agrega medicamentos</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Medicamento</th>
                                                                    <th scope="col">Eliminar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="resulmed" class="table-group-divider">
                                                                @foreach ($medicamentos as $medicamento)
                                                                <tr>
                                                                    <td>{{ $medicamento->medicamento }}</td>
                                                                    <td>
                                                                        <form action="{{ route('relacion.destroy', $medicamento->id) }}" method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button class="btn" type="submit">
                                                                                <i class="fa-solid fa-trash-can"></i>
                                                                            </button>
                                                                        </form>
                                                                    </td>
                                                                </tr>   
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    
                </div>
            
                
            </div>
        </div>

        <div class="botones">
            
        </div>
    </div>
</main>


<script>
    const inputBusqueda = document.querySelector('#medabuscar');
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;

    const tablaMedicamentos = document.getElementById('resulmed')
    const btnMedicamentos = document.getElementById('btnMedicamentos')

    const inputIdMedicamento = document.getElementById('medicamento_id')

    const idConsulta = document.getElementById('consulta_id')
    const noSesion = document.getElementById('sesion')

    let medicamentos = [];
    let stockMedicamentos = [];

    document.addEventListener('DOMContentLoaded', () => {
        // medicamentos.length = 0;
        if (localStorage.getItem('medicamentosLS')){
            medicamentos = JSON.parse(localStorage.getItem('medicamentosLS'))
            // actualizarTabla("actualizar")
            }
        
        medabuscar.value = ""
        dosis.value = ""
        frecuencia.value = ""
        indicaciones.value = ""
    })

    // btnMedicamentos.addEventListener("click", e =>{
    //     actualizarTabla('agregar');
    // })


    medabuscar.addEventListener("keyup", e=>{
        var texto = e.target.value;
        if(texto.length>=6){
            listaMedPadre.classList.add('lista-medicamentos-visible');
            fetch("/buscamed",{
                method:"post",
                body:JSON.stringify({texto : texto}),
                headers:{
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrfToken
                }
            }).then(response => {
                return response.json();
            }).then(data => {
                var id = data.lista[0].id;
                var html ="";
                for(var i in data.lista){
                    var enlace = '<li onclick="agregarATabla('+data.lista[i].id+')" id="agregarmedicamento"><h3 id="compuesto">'+data.lista[i].compuesto+'</h3><h5 id="datosmed">'+data.lista[i].presentacion+' '+data.lista[i].composicion+'</h5></li>';
                    html += enlace;
                    stockMedicamentos.push(data.lista[i]);
                }
                listaMedicamentos.innerHTML = html;
            }).catch(error => console.error(error));
        }
        else {
            listaMedPadre.classList.remove('lista-medicamentos-visible');
            stockMedicamentos.length = 0;
        }
    })
    
    const agregarATabla = (medID) => {
        const item = stockMedicamentos.find((prod) => prod.id === medID)
        medicamentos.push(item)
        medabuscar.value = item.compuesto+' - '+item.composicion+' - '+item.presentacion;
        inputIdMedicamento.setAttribute('value', item.id);
        listaMedPadre.classList.remove('lista-medicamentos-visible');
        console.log(medicamentos);
        
    }

    const actualizarTabla = (cond) => {
        tablaMedicamentos.innerHTML = ""
        console.log(medicamentos);
        if (cond == "agregar") {
            $consulta = idConsulta.value;
            $nosesion = noSesion.value;
            medicamentos.forEach(med => {
                const tr = document.createElement('tr')
                tr.innerHTML = `<td>${med.compuesto} - ${med.composicion} - ${med.presentacion}</td><td><a class="btn" onclick=eliminarMed(${med.id})><i class="fa-solid fa-trash-can"></i></a></td>`
                tablaMedicamentos.appendChild(tr) ;
            });

            
            medabuscar.focus()

            localStorage.setItem("medicamentosLS", JSON.stringify(medicamentos))

            
        }

        if (cond == "eliminar") {
            medicamentos.forEach(med => {
                const tr = document.createElement('tr')
                tr.innerHTML = `<td>${med.compuesto} - ${med.composicion} - ${med.presentacion}</td><td><a class="btn" onclick=eliminarMed(${med.id})><i class="fa-solid fa-trash-can"></i></a></td>`
                tablaMedicamentos.appendChild(tr) ;

            });

            localStorage.setItem("medicamentosLS", JSON.stringify(medicamentos))
        }

        if (cond == "actualizar") {
            medicamentos.forEach(med => {
                const tr = document.createElement('tr')
                $idmed = med.id
                tr.innerHTML = `<td>${med.compuesto} - ${med.composicion} - ${med.presentacion}</td>
                                <td>
                                    <form action="" method=POST>
                                        @csrf
                                        <button type="submit" class="btn" onclick=eliminarMed(${med.id})><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>`
                tablaMedicamentos.appendChild(tr) ;
            });
        }

    }

    function pasarDatos(id) {
        
        let medicamento = medicamentos.find(medicamento => medicamento.id === id);
        inputBusqueda.value = medicamento.compuesto+' - '+medicamento.composicion+' - '+medicamento.presentacion;
        idmed = medicamento.id;
        medicamentos.length = 0;
        listaMedPadre.classList.remove('lista-medicamentos-visible');
    }


    const eliminarMed = (medID, idConsulta, noSesion) => {
        const item = medicamentos.find((prod) => prod.id === medID)
        const indice = medicamentos.indexOf(item)
        medicamentos.splice(indice, 1)
        actualizarTabla('eliminar')
    }

    // $(document).ready(function(){
    //     $('#btnGuardar').on('submit', function(event) {
    //         event.preventDefault();
    //         alert('funciona');
    //     });
    // });

    const guardarDatos = (event) => {
        alert('funciona')
    }

    // const agregarConsulta = (event) => {
    //     alert('funciona metodo onsubmit')
    // }


</script>

@endsection