<?php require_once "vistas/parte_superior.php"




?>
<!--INICIO del cont principal-->
<div class="container">
    <h1>Tabla</h1>
</div>


<?php

function getSslPage($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function mostrarDatos(){
    $url = "https://datos.cdmx.gob.mx/api/3/action/datastore_search?resource_id=ff1d4cbf-5985-45db-b40f-d820ce2b01a2&limit=2";
    
    //$datos = file_get_contents($url);
    $datos = getSslPage($url);

    $datos = json_decode($datos);
    
    $rs = $datos->result->records;

    foreach($rs as $caso){
        echo "<tr>
            <td>{$caso->_id}</td>
            <td>{$caso->colonia}</td>
            <td>{$caso->alcaldia}</td>
            <td nowrap>{$caso->nueva_clave}</td>
            <td>{$caso->total}</td>
            <td>{$caso->cuartil}</td>
            <td>{$caso->quintil}</td>
            <td>{$caso->octil}</td>
            <td>{$caso->decil}</td>
            <!--td>{$caso->geo_shape}</td-->
            <!--td>{$caso->geo_point}</td-->
            </tr>";
    }
}

?>



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
                                <th>Geo Shape</th>
                                <th>Geo Point</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                               mostrarDatos();
                           ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php require_once "vistas/parte_inferior.php"?>

           