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

<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
<div class="user-profile">
<div class="widget-content widget-content-area">
<div class="d-flex justify-content-between">
<h3 class="">Perfil</h3>
<a href="<?php echo base_url('Usuario/edit_user2/'.$usuario['id']);?>" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
</div>
<div class="text-center user-info">
<img width="200" src="<?php echo base_url(); ?>/uploads/perfil/<?=$usuario['foto']?> " alt="avatar">
<p class=""><?=$usuario['nombres']?> <?=$usuario['primer_apellido']?> <?=$usuario['segundo_apellido']?></p>
</div>
<div class="user-info-list">

<div class="">
    <ul class="contacts-block list-unstyled">
        <li class="contacts-block__item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee me-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> <?=$usuario['puesto']?>
        </li>
        <li class="contacts-block__item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><?=$usuario['created_at']?>
        </li>
        <li class="contacts-block__item">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-3"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><?=$usuario['secret']?></a>
        </li>
        <li class="contacts-block__item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-3"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> <?=$usuario['telefono']?>
        </li>
    </ul>
    <ul class="list-inline mt-4">
        <li class="list-inline-item mb-0">
            <a class="btn btn-info btn-icon btn-rounded" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
            </a>
        </li>
        <li class="list-inline-item mb-0">
            <a class="btn btn-danger btn-icon btn-rounded" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dribbble"><circle cx="12" cy="12" r="10"></circle><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"></path></svg>
            </a>
        </li>
        <li class="list-inline-item mb-0">
            <a class="btn btn-dark btn-icon btn-rounded" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
            </a>
        </li>
    </ul>

</div>                                    
</div>
</div>
</div>
</div>

<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">

<div class="usr-tasks ">
<div class="widget-content widget-content-area">
<h3 class="">Task</h3>
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Projects</th>
            <th>Progress</th>
            <th>Task Done</th>
            <th class="text-center">Time</th>
        </tr>
        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
    </thead>
    <tbody>
        <tr>
            <td>Figma Design</td>
            <td>                                                    
                <div class="progress br-30">
                    <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: 29.56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><p class="text-danger">29.56%</p></td>
            <td class="text-center">
                <p>2 mins ago</p>
            </td>
        </tr>

        <tr>
            <td>Vue Migration</td>
            <td>
                <div class="progress br-30">
                    <div class="progress-bar br-30 bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><p class="text-success">50%</p></td>
            <td class="text-center">
                <p>4 hrs ago</p>
            </td>
        </tr>
        
        <tr>
            <td>Flutter App</td>
            <td>                                                    
                <div class="progress br-30">
                    <div class="progress-bar br-30 bg-warning" role="progressbar" style="width: 39%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><p class="text-danger">39%</p></td>
            <td class="text-center">
                <p>a min ago</p>
            </td>
        </tr>
        <tr>
            <td>API Integration</td>
            <td>                                                    
                <div class="progress br-30">
                    <div class="progress-bar br-30 bg-success" role="progressbar" style="width: 78.03%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><p class="text-success">78.03%</p></td>
            <td class="text-center">
                <p>2 weeks ago</p>
            </td>
        </tr>
        
        <tr>
            <td>Blog Update</td>
            <td>                                                    
                <div class="progress br-30">
                    <div class="progress-bar br-30 bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><p class="text-success">100%</p></td>
            <td class="text-center">
                <p>18 hrs ago</p>
            </td>
        </tr>

        <tr>
            <td>Landing Page</td>
            <td>                                                    
                <div class="progress br-30">
                    <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: 19.15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><p class="text-danger">19.15%</p></td>
            <td class="text-center">
                <p>5 days ago</p>
            </td>
        </tr>

        <tr>
            <td>Shopify Dev</td>
            <td>                                                    
                <div class="progress br-30">
                    <div class="progress-bar br-30 bg-info" role="progressbar" style="width: 60.55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><p class="text-success">60.55%</p></td>
            <td class="text-center">
                <p>8 days ago</p>
            </td>
        </tr>

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
