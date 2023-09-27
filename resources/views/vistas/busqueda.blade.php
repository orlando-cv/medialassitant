@extends('layouts.azul')

@section('contenido')
    <div class="container-fluid cont-mensaje">
        <div class="row fila-mensaje">
            <div class="col-lg-6 col-mensaje">
                <h1 class="titulo-mensaje">HISTORIAL CLÍNICO</h1>
                <p class="parrafo-mensaje">Bienvenido a la herramienta para hospitales y profesionales de la salud que ayudara a llevar un completo control del historial de sus pacientes, organice citas, y encuentre historiales mediso de forma fácil.</p>
            </div>
        </div>
    </div>
    
    <div class="container-fluid cont-busqueda">
        <div class="row fila-busqueda">
            <div class="col-lg-6 col-busqueda">
                {{-- <form action="">
                    @csrf
                </form> --}}
                <input id="paciente" class="form-control form-control-lg" type="text" placeholder="Nombre del paciente" aria-label=".form-control-lg example">
            </div>
        </div>
        <div class="row fila-resultados">
            <h1>SUGERENCIAS: </h1>
            <div class="col-lg-6 col-resultados">
                <div class="scroll-bg">
                    <div class="scroll-div">
                        <div class="scroll-object">
                            <table>
                                <tbody id="resultados">

                                </tbody>
                                {{-- <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr>
                                <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr>
                                <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr>
                                <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr>
                                <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr>
                                <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr>
                                <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr>
                                <tr>
                                    <td>Nombre Completo <br> Domicilio </td>
                                </tr> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row fila-agregar-paciente">
            <div class="col-lg-6 col-agregar-paciente">
                <a href="{{ route('paciente') }}">Agregar Paciente</a>
            </div>
        </div>
    </div>

    {{-- return view('vistas.paciente'); --}}
    

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

<script>
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
    paciente.addEventListener("keyup", e=>{
        var texto = e.target.value;
        if(texto.length>=3){
            fetch("/buscador",{
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
                var html ="";
                for(var i in data.lista){
                    var idPaciente = data.lista[i].id
                    console.log(idPaciente);
                    var enlace = `<tr><td><a href="/diagnostico/${idPaciente}">${data.lista[i].nombre}<br>${data.lista[i].calle} ${data.lista[i].num_ext}</a></td></tr>`;
                    html += enlace;
                }
                resultados.innerHTML = html;
            }).catch(error => console.error(error));
        }
    })
</script>

@endsection


