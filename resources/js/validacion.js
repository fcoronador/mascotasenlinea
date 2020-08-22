$(document).ready(function () {


    let soloLetras = /[^a-zA-ZáéíóúñÑüÜÁÉÍÓÚ\-\s]/g;
    let soloNumeros = /[\-\D]/g;
    let soloDir = /[^a-zA-z0-9\#\-\°\s]/g;
    let soloCorreo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/g;

    $('#idCedula').change(function () {

        let n = $('#idCedula').val().length;

        if (n > 15 || $('#idCedula').val() <= 30000 || soloNumeros.test($('#idCedula').val())) {
            $('#helpidCed').text('Has escrito mal la identificación.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        } else {
            $('#helpidCed').text('Has escrito correctamente la identificación.').addClass('alert alert-primary my-2').removeClass('alert-danger');
        }
    });
    
    

    $('#nombre').change(function () {

        let n = $('#nombre').val().length;

        if (n > 40 || soloLetras.test($('#nombre').val())) {
            $('#helpNombre').text('Has escrito mal el nombre.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        } else {
            $('#helpNombre').text('Has escrito correctamente el nombre.').addClass('alert alert-primary my-2').removeClass('alert-danger');
        }
    });

    $('#apellido').change(function () {

        let n = $('#apellido').val().length;

        if (n > 40 || soloLetras.test($('#apellido').val())) {
            $('#helpApellido').text('Has escrito mal el apellido.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        } else {
            $('#helpApellido').text('Has escrito correctamente el apellido.').addClass('alert alert-primary my-2').removeClass('alert-danger');
        }
    });

    $('#telefono').change(function () {

        let n = $('#telefono').val().length;

        if (n > 15 || $('#telefono').val() < 1000000 || soloNumeros.test($('#telefono').val())) {
            $('#helpTelefono').text('Has escrito mal teléfono.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        } else {
            $('#helpTelefono').text('Has escrito correctamente teléfono.').addClass('alert alert-primary my-2').removeClass('alert-danger');
        }
    });

    $('#direccion').change(function () {

        let n = $('#direccion').val().length;

        if (n > 75 || soloDir.test($('#direccion').val())) {
            $('#helpDir').text('Has escrito mal la dirección.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        } else {
            $('#helpDir').text('Has escrito correctamente la dirección.').addClass('alert alert-primary my-2').removeClass('alert-danger');
        }
    });

    $('#correo').change(function () {

        let n = $('#correo').val().length;

        if (n > 40){
            $('#helpcor').text('Has escrito mal el correo.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        }

        if (soloCorreo.test($('#correo').val())) {
            $('#helpcor').text('Has escrito correctamente el correo.').addClass('alert alert-primary my-2').removeClass('alert-danger');
        } else  {
            $('#helpcor').text('Has escrito mal el correo.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        }
    });

    $('#contrasena').change(function () {

        let n = $('#contrasena').val().length;

        if (n > 300) {
            $('#helpcontra').text('Has sobrepasado el límite cáracteres.').addClass('alert alert-danger my-2').removeClass('alert-primary');
        } else {
            $('#helpcontra').text('Has escrito correctamente la contraseña.').addClass('alert alert-primary my-2').removeClass('alert-danger');
        }
    });
    
    

});