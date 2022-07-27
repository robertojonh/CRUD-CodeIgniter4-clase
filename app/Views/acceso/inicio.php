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