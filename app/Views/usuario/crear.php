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
                    <li class="breadcrumb-item"><a href="<?php echo base_url('/Usuario/listar');?>">Tabla</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Formulario Crear Nuevo usuario</li>
                  </ol>
                </nav>
              </div>
                    <!-- /BREADCRUMB -->
              <div class="row layout-top-spacing">
                <h3><br>Formulario para crear un nuevo usuario</h3>
                  <div class="container mt-5">
                    <form action="<?php echo base_url('/probando');?>" method="POST" id="add_create" name="add_create">
                    <div class="form-group">
                        <label>Nombre de usario (username)</label>
                          <input type="text" name="username" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Correo Electrónico</label>
                          <input type="text" name="email" class="form-control" >
                      </div>
<!-- Password -->
<div class="form-group">
<label>Contraseña</label>
                        <input type="password" class="form-control" name="password" inputmode="text" autocomplete="new-password"  required />
                    </div>

                    <!-- Password (Again) -->
                    <div class="form-group">
                    <label>Confirma la contraseña</label>
                        <input type="password" class="form-control" name="password_confirm" inputmode="text" autocomplete="new-password"  required />
                    </div>
                      <div class="form-group">
                        <label>Nombre(S)</label>
                          <input type="text" name="nombres" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Primer Apellido</label>
                          <input type="text" name="primer_apellido" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Segundo Apellido</label>
                          <input type="text" name="segundo_apellido" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Puesto</label>
                          <input type="text" name="puesto" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Número de Teléfono</label>
                          <input type="text" name="telefono" class="form-control" >
                      </div>
                      <div class="form-group">
                        <label>Observaciones</label>
                          <input type="text" name="observaciones" class="form-control" >
                      </div>
                      
                      <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block">Crear al nuevo usuario</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>

    
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