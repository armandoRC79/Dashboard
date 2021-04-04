<?php require_once "vistas/parte_superior.php"

?>
<!--INICIO del cont principal-->
<div class="container">
    <h1>Tabla</h1>
</div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-success">Alcaldia</button>
            </div>
        </div>
    </div>

<!-- Modal para CRUD -->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="panel-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-disniss="modal" aria-label="close"><span aria-hidden="true">&times;
                    </span>
                    </button>
                </div>
                <form id="formPersonas">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre" class="col-form-label"></label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-disaiss="modal">Cancelar</button>
                        <button type="submit" id="btnBuscar" class="btn btn-dark">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Tabla con dataTable -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablapp" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-centre">
                            <tr>
                                <th>Id</th>
                                <th>Colonia</th>
                                <th>Alcaldia</th>
                                <th>Nueva Clave</th>
                                <th>Total</th>
                                <th>Cuartil</th>
                                <th>Quintil</th>
                                <th>Octil</th>
                                <th>Decil</th>
                            </tr>
                        </thead>
                        <tbody id="res">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php require_once "vistas/parte_inferior.php"?>


           