//Código para Datable
/*
$(document).ready(function() {
    $('#ejemplo').DataTable();
});

$(document).ready(function() {
    $('').DataTable({
        //para cambiar el lenguaje a español
        "lenguaje": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encuentra resultado",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ resgistros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ultimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing":"Procesando...",
        }
    });
});*/

$(document).ready(function() {
    $('#ejemplo').DataTable({
        "lenguaje": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encuentra resultado",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ resgistros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ultimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        }
    });
});