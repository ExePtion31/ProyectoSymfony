///Data table 
$(document).ready(function() {
    $('#tablausers').DataTable();
    $('#tablamaterias').DataTable();
    $('#tablacalifi').DataTable();


    //Validacion formulario registro de usuarios
    $('#form_registro_est').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        var grado = document.getElementById('gradoRE')

        if($('#nombreRE').val().trim() === ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, digite el nombre.'
            })
        }else if($('#edadRE').val().trim() === ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, digite la edad.'
            })
        }else if(grado.value == "0"){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, seleccione el grado.'
            })
        }
    })

    //Validacion formulario registro de materias
    $('#form_registro_mate').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();

        if($('#materiaRM').val().trim() === ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, digite la materia.'
            })
        }else{
            $.ajax({
                type: $(this).attr('method'),
                data : datos,
                url: '/insert/materias',
                dataType: 'json',
                success: function(data){
                    var resultado = data;
                    if(resultado.respuesta == "Exito"){
                        Swal.fire(
                            'Correcto',
                            'El usuario ha sido creado exitosamente!',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = 'login.php';           
                        }, 2000);
                    }else{
                        Swal.fire(
                            'Error',
                            'Hubo un error, puede que este correo ya este registrado.',
                            'error'
                        )
                    }
                }
            })
        }
    })

    //Validacion formulario registro de calificaciones
    $('#form_registro_notas').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        var materia = document.getElementById('materiaRCF')
        var estudiante = document.getElementById('estudianteRCF')

        if($('#fechaRCF').val().trim() === ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, seleccione la fecha.'
            })
        }else if(estudiante.value == "0"){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, seleccione el estudiante.'
            })
        }else if(materia.value == "0"){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, seleccione una materia.'
            })
        }else if($('#calificacionRCF').val().trim() === ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, digite la calificación.'
            })
        }
    })
} );





