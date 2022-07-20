<!doctype html>
<html lang="en">
  <head>
    <?= $this->include('cabecera/header.php');?>
  </head>
  <body class="layout-boxed" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="140">
      
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
        <?= $this->include('cabecera/menu.php');?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
        <?= $this->include('cabecera/navbar.php');?>
    <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Tabla</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
                    <div class="row layout-top-spacing">
                    <h3><br>Hola, listare alumnos a continuacion:</h3>
    
    
                    <div class="d-flex justify-content-end">
                        <a href="<?php echo base_url('/create'); ?>" class="btn btn-success mb-2">Crear Usuario</a>
                    </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">APELLIDO</th>
                                    <th scope="col">OPCIONES</th>
                                </tr>
                            </thead>
                        <tbody>
                <?php foreach($personas as $persona){  ?>
                            <tr>
                                <td scope="row"><?php echo $persona['id']; ?></td>
                                <td><?=$persona['nombre']; ?></td>
                                <td><?=$persona['primer_apellido']; ?></td>
                                <td>
                                    <a name="" id="" class="btn btn-primary" href="<?php echo base_url('edit_user/'.$persona['id']);?>" role="button">Editar</a>
                                    <a name="" id="" class="btn btn-danger" href="<?php echo base_url('delete/'.$persona['id']);?>" role="button">Eliminar</a>
                                </td>
                            </tr>
                <?php } ?>
                        </tbody>
                        </table>
    
                    </div>
                
            </div>
        </div>
        
<!-- modal -->

<!-- end modal -->

        <!--  ENDS CONTENT AREA -->

            <!--  BEGIN FOOTER  -->
                <?= $this->include('cabecera/footer.php');?>
            <!--  END FOOTER  -->
            
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
                    <?= $this->include('cabecera/footer_js.php');?>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

    <script>var base_url="<?php echo base_url();?>";</script>
</body>
</html>
