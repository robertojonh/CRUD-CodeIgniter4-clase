<!doctype html>
<html lang="en">
  <head>
    <?= $this->include('cabecera/header.php');?>
<link href="<?php echo base_url(); ?>/assets/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/assets/src/assets/css/light/users/user-profile.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>/assets/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/assets/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css" />
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

    <div class="main-container " id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <?= $this->include('cabecera/navbar.php');?>
        
    <!--  END SIDEBAR  -->


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">

                   

        <!-- CONTENT AREA -->
        <div class="row layout-top-spacing">


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">

<div class="usr-tasks ">
<div class="widget-content widget-content-area">
<h3 class="">Task</h3>
<div class="table-responsive">
<table id="zero-config" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NOMBRES</th>
                                    <th scope="col">APELLIDO PATERNO</th>
                                    <th scope="col">APELLIDO MATERNO</th>
                                    <th scope="col">OBSERVACIONES</th>
                                    <th scope="col">OPCIONES</th>
                                </tr>
                            </thead>
                        <tbody>
                <?php foreach($usuario as $usuario){  ?>
                            <tr>
                               <td><?=$usuario['id'] ?></td>
                                <td><?=$usuario['nombres']?></td>
                                <td><?=$usuario['primer_apellido']; ?></td>
                                <td><?=$usuario['segundo_apellido']; ?></td>
                                <td><?=$usuario['observaciones']; ?></td>
                                <td>
                                <a name="" id="" class="btn btn-primary" href="<?php echo base_url('Usuario/edit_user2/'.$usuario['id']);?>" role="button">Editar</a>
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
<!-- CONTENT AREA -->
</div>
</div>
<?= $this->include('cabecera/footer.php');?>
</div>
<!--  END CONTENT AREA  -->
</div>

    <?= $this->include('cabecera/footer_js.php');?>


<script>var base_url="<?php echo base_url();?>";</script>

</body>
</html>
