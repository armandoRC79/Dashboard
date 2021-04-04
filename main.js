$(document).ready(function() {
    tablaPersonas = $("#tablapp").DataTable({
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
            "sProcessing": "Procesando...",
        }
    });

    $("#btnNuevo").click(function() {
        $("#formPersonas").trigger("reset");
        $(".modal-header").css("background-color", "#28a745");
        $(".modal-header").css("color", "white");
        $("#exampleModalLabel").text("Casos por alcaldia");
        $(".col-form-label").text("Alcaldia:");
        $("#modalCRUD").modal("show");
    });

    $("#formPersonas").submit(function(e) {
        e.preventDefault();
        alcaldia = $.trim($("#nombre").val());

        var urli = 'https://datos.cdmx.gob.mx/api/3/action/datastore_search?resource_id=ff1d4cbf-5985-45db-b40f-d820ce2b01a2&q=';

        const url = urli + alcaldia;
        getISS(url);
        lista(url);

        $("#modalCRUD").modal("hide");
    });


    async function getISS(url) {
        const response = await fetch(url);
        const data = await response.json();

        let res = document.querySelector('#res');
        res.innerHTML = '';

        for (let el of data.result.records) {
            res.innerHTML += `<tr><td>${el._id}</td>
        <td>${el.colonia}</td>
        <td>${el.alcaldia}</td>
        <td>${el.nueva_clave}</td>
        <td>${el.total}</td>
        <td>${el.cuartil}</td>
        <td>${el.quintil}</td>
        <td>${el.octil}</td>
        <td>${el.decil}</td></tr>`

        }


    }


    async function lista(url) {

        const response2 = await fetch(url);
        const data2 = await response2.json();


        const {
            records
        } = data2.result

        console.log(records.map(item => item.colonia))
    }
});