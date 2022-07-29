<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('plantilla/cabecera'); ?> 
</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    <?= $this->include('plantilla/menu_navegacion'); ?>     
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <?= $this->include('plantilla/menu_principal'); ?>  
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">
                <?= $this->include('plantilla/migas'); ?>  
                    <!-- CONTENT AREA -->
                    <div class="row layout-top-spacing">

                        <div class="col-12">
                            <h3>Bienvenido nuevamente al sistema <?=$usuario['usuario_username']?></h3>
                        </div>
                        <div class="col-md-12">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Table</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">NOMBRE</th>
                                                    <th class="text-center" scope="col">TIPO</th>
                                                    <th class="text-center" scope="col">UBICACION</th>
                                                    <th class="text-center" scope="col">CAPACIDAD</th>
                                                    <th class="text-center" scope="col">OPCIONES</th>
                                                </tr>
                                                <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($edificios as $edificio) { ?>
                                                <tr>
                                                    <td class="text-center"><?=$edificio['nombre']?></td>
                                                    <td class="text-center"><?=$edificio['tipo']?></td>
                                                    <td class="text-center"><?=$edificio['capacidad']?></td>
                                                    <td class="text-center"><?=$edificio['ubicacion']?></td>
                                                    <td class="text-center">
                                                        <a name="" id="" class="btn btn-success" href="#" role="button">Editar</a>
                                                        <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- CONTENT AREA -->
                </div>
            </div>
            <?= $this->include('plantilla/pie'); ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <?= $this->include('plantilla/pie_js'); ?>
</body>
</html>