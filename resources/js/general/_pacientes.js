 
$(document).ready(function() {
    
    //Obtiene todas las filas del paciente
    let _filas = document.querySelectorAll('.paciente-fila');

    for(let f of _filas){
        f.addEventListener('click',async (e)=>{
            //Obtiene el id
            let _id = e.target.dataset.id;
            //Sí el id no existe lo busca en el padre del td
            if(_id === undefined){
                _id = e.target.parentElement.dataset.id;
            }

            //url
            let _url = `/api/paciente_por_id/${_id}`;
            //Petición
            let _peticion = await fetch(_url);

            let p = await _peticion.json();
            
            //Obtiene el título del paciente
            let _titulo = document.getElementById('paciente_titulo');

            //Cambia el título de la modal
            _titulo.innerHTML = `${p.nombre} ${p.apellido_paterno} ${p.apellido_materno}`;

            _titulo.href = `/paciente/ficha/${p.id}`;

            //Muestra la modal del paciente
            $('#MostrarPaciente').modal('show');

            console.log(p)

        });
    }

    //Crea la tabla
    $('#pacientes_tabla').DataTable();


});
 