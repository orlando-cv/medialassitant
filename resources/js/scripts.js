// $('#btnGuardar').on('submit', function(event){
    
//     alert("funciona");
//     event.preventDefault();
// });

// $(document).ready(function() {
//     alert("funciona")
// })

// const guardarDatos = () => {
//     alert("funciona")
// }

$(document).ready(function(){
    
    $("#selectFecha").change(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
            }
        }); 
        $.ajax({
            method: 'POST',
            url: '/cambiardatos',
            data: {
                id: parseInt( $("#idPaciente").val() ),
                fecha: $("#selectFecha").val()
            }
        }).done(function (res) {
            var consulta = JSON.parse(res);
            
            console.log(consulta);
            document.querySelector('#noSesion span').textContent = consulta[0].sesion;
            document.querySelector('#noSesion span').textContent = consulta[0].sesion;
            document.querySelector('#noSesion span').textContent = consulta[0].sesion;
            document.querySelector('#padecimiento span').textContent = consulta[0].padecimiento;
            document.querySelector('#alergias span').textContent = consulta[0].alergias;
            document.querySelector('#antecedentes span').textContent = consulta[0].antecedentes;

            medicamentosConsulta(consulta[0].id);

        })
    })

    
})

const medicamentosConsulta = (idCon) => {
    var $idConsulta = idCon;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 

    $.ajax({
        method: 'POST',
        url: '/medicamentoconsulta',
        data: {
            id: $idConsulta
        }
    }).done(function (meds) {
        var medicamentos = JSON.parse(meds);
        const listaMedicamentos = document.querySelector("#lista-medicamentos");
        while (listaMedicamentos.firstChild) {
            listaMedicamentos.removeChild(listaMedicamentos.firstChild);
        }

        medicamentos.forEach(medicamento => {
            let elemento = document.createElement("li");
            elemento.textContent = medicamento.medicamento;
            // elemento.classList.add('span');
            elemento.classList.add('text-decoration-none');
            console.log(elemento);
            listaMedicamentos.appendChild(elemento);
        });

        console.log(medicamentos);
    })
    
}




const agregarConsulta = (event) => {
    alert('funciona metodo onsubmit')
}

// const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
//     selectFecha.addEventListener("change", e=>{
//         // console.log(e.target.value);
//         var texto = e.target.value;
//         console.log("funciona");
//     })