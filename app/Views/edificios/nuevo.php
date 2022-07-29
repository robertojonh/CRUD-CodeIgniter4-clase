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

                    <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Aula</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="row g-3" method="POST">
                                        <div class="col-md-6">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" required="required" class="form-control" id="nombre" name="nombre">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tipo" class="form-label">Tipo</label>
                                            <select id="tipo" required="required" class="form-select" name="tipo">
                                                <option value="" selected>Selecciona...</option>
                                                <?php foreach($tipo_edificio as $tipo){ ?>
                                                    <option value="<?=$tipo['id']?>"><?=$tipo['tipo']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="ubicacion" class="form-label">Ubicacion</label>
                                            <input type="text" required="required" class="form-control" id="ubicacion" name="ubicacion">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="capacidad" class="form-label">Capacidad</label>
                                            <input type="number" required="required" max="100" min="1" class="form-control" id="capacidad" name="capacidad">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="amenidades" class="form-label">Amenidades</label>
                                            <textarea class="form-control" id="amenidades" name="amenidades" rows="3"></textarea>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Aregar aula</button>
                                        </div>
                                    </form>

                                   
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