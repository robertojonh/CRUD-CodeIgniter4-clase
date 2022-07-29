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
                    <li class="breadcrumb-item"><a href="<?php echo base_url('/view_user ');?>">Tabla</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar</li>
                  </ol>
                </nav>
              </div>

              <div class="container mt-5">
                <form method="post" id="update_user" name="update_user" 
                  action="<?php echo base_url('/Usuario/update2') ?>">
                    <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
                    <div class="form-group">
                        <label>Nombre de uusario (username)</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $user_obj['username']; ?>">
                      </div>

                      <div class="form-group">
                        <label>Nombre(S)</label>
                          <input type="text" name="nombres" class="form-control" value="<?php echo $user_obj['nombres']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Primer Apellido</label>
                          <input type="text" name="primer_apellido" class="form-control" value="<?php echo $user_obj['primer_apellido']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Segundo Apellido</label>
                          <input type="text" name="segundo_apellido" class="form-control" value="<?php echo $user_obj['segundo_apellido']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Puesto</label>
                          <input type="text" name="puesto" class="form-control" value="<?php echo $user_obj['puesto']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Número de Teléfono</label>
                          <input type="text" name="telefono" class="form-control" value="<?php echo $user_obj['telefono']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Observaciones</label>
                          <input type="text" name="observaciones" class="form-control" value="<?php echo $user_obj['observaciones']; ?>">
                      </div>
                      
                      <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block">Actualizar Datos</button>
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
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

    <script>var base_url="<?php echo base_url();?>";</script>
</body>
</html>