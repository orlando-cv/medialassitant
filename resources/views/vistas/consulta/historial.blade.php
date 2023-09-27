@extends('vistas.consulta')

@section('historial')

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
                <h2>Juan Carlos Chavez</h2>
            </div>
            <div class="col-lg-3 col-datos-paciente d-flex align-items-center">
                <label for="">Fecha</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>23/04/2023</option>
                    <option value="1">10/03/2023</option>
                    <option value="2">13/12/2022</option>
                    <option value="3">16/08/2022</option>
                </select>
            </div>
        </div>

        <div class="row fila-datos">
            <div class="col-lg-2 col-datos">
                <p>Edad: <span>34</span></p>
                <p>Sexo: <span>M</span></p>
                <p>Peso: <span>75kg</span></p>
            </div>
            <div class="col-lg-2 col-datos">
                <p>Escolaridad: <span>Superior</span></p>
                <p>Ocupación: <span>Astronauta</span></p>
                <p>Estatura: <span>34</span></p>
            </div>
        </div>
        <div class="row fila-ultima-consulta">
            <div class="col-lg-3 col-ultima-consulta">
                <h2>Ultima Consulta</h2>
            </div>
            <div class="col-lg-3 col-ultima-consulta">
                <h2 class="no-sesiones">Numero de sesión: <span>3</span></h2>
            </div>
        </div>
        <div class="row fila-datos-generales">
            <div class="col-lg-5 col-datos-generales">
                <p>Padecimiento: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p>
                <p>Tratamientos: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p>
                <p>Medicamentos: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p>
                <p>Alergias: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p>
                <p>Antecedentes: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p>
                <p>Otros: <span>Lorem ipsum dolor sit amet, consectetuer adipiscing</span></p>
            </div>
        </div>
    </div>
    
@endsection