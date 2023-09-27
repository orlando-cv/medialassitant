@extends('layouts.azul')

@section('contenido')
    
    <main>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                {{-- Aqui va la primera parte de la pagina de consulta --}}
                <div class="carousel-item active">
                    
                    {{-- @yield('historial') --}}

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
                                <p>Estatura: <span>1.72mts</span></p>
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
                </div>

                {{-- Aqui va la segunda parte de la pagina de consulta --}}
                <div class="carousel-item">
                    <div class="container-fluid segunda-parte">
                        <div class="row">
                            {{-- Aqui va la parte de los sintomas y datos generales --}}
                            @dd($consulta->antecedentes)
                            <div class="col-6">
                                <div class="container">
                                    <div class="row fila-datos-paciente">
                                        <div class="col-lg-12 col-datos-paciente">
                                            <h2 class="titulo-segunda-parte">Juan Carlos Chavez</h2>
                                        </div>
                                        <div class="col-lg-5 col-datos">
                                            <p>Edad: <span>34</span></p>
                                            <p>Sexo: <span>M</span></p>
                                            <p>Escolaridad: <span>Superior</span></p>
                                        </div>
                                        <div class="col-lg-5 col-datos">
                                            <p>Ocupación: <span>Astronauta</span></p>
                                            <p>Peso: <span>75kg</span></p>
                                            <p>Estatura: <span>34</span></p>
                                        </div>
                                    </div>
                                    <div class="row fila-consulta d-flex justify-content-between">
                                        <div class="col-lg-12 titulo-consulta">
                                            <h2 class="titulo-segunda-parte">Nueva Consulta:</h2>
                                        </div>
                                        <div class="col-lg-5 d-flex align-items-center fecha-consulta">
                                            <label for="">Fecha:</label>
                                            <input class="form-control" type="text" value="02/05/2023" disabled readonly>
                                        </div>
                                        <div class="col-lg-5 d-flex align-items-center justify-content-end no-consulta">
                                            <label for="">No. Sesión:</label>
                                            <input class="form-control" type="text" value="3" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="row fila-datos-consulta">
                                        <div class="col-lg-12">
                                            <label for="">Padecimiento</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="300"></textarea>
                                        </div>
                                    </div>
                                    <div class="row fila-datos-consulta">
                                        <div class="col-lg-12">
                                            <label for="">Antecedentes:</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" maxlength="300"></textarea>
                                        </div>
                                    </div>
                                    <div class="row fila-datos-consulta">
                                        <div class="col-lg-12 d-flex align-items-center">
                                            <label for="">Alergias:</label>
                                            <input class="form-control w-100" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="row fila-datos-consulta">
                                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                            <label for="">Peso:</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                            <label for="">Talla:</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                            <label for="">Temp:</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row fila-datos-consulta">
                                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                            <label for="">Presión:</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                            <label for="">Frec. Cardiaca:</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                            <label for="">Glucosa:</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row fila-datos-consulta">
                                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                                            <button class="btn btn-guardar">Guardar</button>
                                            <button class="btn btn-imprimir">Imprimir Receta</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                            {{-- Aqui va la parte de agregar los medicamentos --}}
                            <div class="col-6">
                                <div class="container">
                                    <h2 class="titulo-segunda-parte">Tratamientos:</h2>
                                    <div class="row fila-tratamientos">
                                        <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                            <label for="">Medicamento:</label>
                                            <input class="form-control w-75" type="text" name="" id="">
                                        </div>
                                        <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                            <label for="">Presentación:</label>
                                            <input class="form-control w-75" type="text" name="" id="">
                                        </div>
                                        <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                            <label for="">Dosis:</label>
                                            <input class="form-control w-75" type="text" name="" id="">
                                        </div>
                                        <div class="col-lg-12 d-flex align-items-center justify-content-end col-tratamientos tratamientos">
                                            <label for="">Frecuencia:</label>
                                            <input class="form-control w-75" type="text" name="" id="">
                                        </div>
                                        <div class="col-lg-12 tratamientos">
                                            <label for="">Indicaciones:</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="300"></textarea>
                                        </div>
                                        <div class="col-lg-12 tratamientos d-flex justify-content-center">
                                            <button class="agregar-tratamiento">Agregar Tratamiento</button>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center fila-tratamientos tabla-tratamientos">
                                        <div class="col-lg-12">
                                            <div class="scroll-bg">
                                                <div class="scroll-div">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Medicamento</th>
                                                                <th scope="col">Presentación</th>
                                                                <th scope="col">Eliminar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-group-divider">
                                                            <tr>
                                                                <td>Parecetamol</td>
                                                                <td>500mg</td>
                                                                <td><button class="btn"><i class="fa-solid fa-trash-can"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Naproxeno</td>
                                                                <td>250mg</td>
                                                                <td><button class="btn"><i class="fa-solid fa-trash-can"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Naproxeno</td>
                                                                <td>250mg</td>
                                                                <td><button class="btn"><i class="fa-solid fa-trash-can"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Naproxeno</td>
                                                                <td>250mg</td>
                                                                <td><button class="btn"><i class="fa-solid fa-trash-can"></i></button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Naproxeno</td>
                                                                <td>250mg</td>
                                                                <td><button class="btn"><i class="fa-solid fa-trash-can"></i></button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
        </div>
    </main>
    
@endsection

