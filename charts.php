<?php require_once "vistas/parte_superior.php"




?>
<!--INICIO del cont principal-->
<div class="container">
    <h1>Dashboard</h1>
</div>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Gráficas</h1>
                    <p class="mb-4">Todos los datos integrados en este espacio son obtenidos del portal de datos abiertos de la ciudad de México  <a
                            target="_blank" href="https://datos.cdmx.gob.mx/dataset/?groups=covid-19&page=1">Portal de datos abiertos CDMX</a>.</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Mapa de iztapalapa</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_iztapalapa_map.svg" alt="">
                                    </div>
                                    <p>Mapa referencial de la alcaldia iztapalapa </p>
                                    <p>  Problación Total: 1,835,486</p>
                                    <p>  Mujeres: 947,835</p>
                                    <p>  Hombres: 887,651</p>
                                </div>
                            </div>

                            <!-- radar Chart -->

                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Radar de casos de Covid-19 en Iztapalapa</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-polaArea">
                                        <canvas id="myMapChart"></canvas>
                                    </div>
                                    <hr>
                                    <p>Fuente: Portal de datos de la Ciudad de México</p>                                  
                                </div>
                            </div>

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Casos por colonia</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="mySsChart"></canvas>
                                    </div>
                                    <hr>
                                    <p>Fuente: Portal de datos de la Ciudad de México</p> 
                                </div>
                            </div>

                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Colonias cercanas a la UACM </h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myUACMChart"></canvas>
                                    </div>
                                    <hr>
                                    <p>Colonias aledañas a la UACM</p>
                                    <p>Fuente: Portal de datos de la Ciudad de México</p>
                                </div>
                            </div>

                        </div>

                        
                    </div>

                </div>
                <!-- /.container-fluid -->
                
<?php require_once "vistas/parte_inferior.php"?>

