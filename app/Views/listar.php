<!doctype html>
<html lang="en">
  <head>
    <title>Lista de Usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <h3>Hola, listare alumnos a continuacion:</h3>
    
    <div class="container">
    <div class="d-flex justify-content-end">
        <a href="<?php echo base_url('create') ?>" class="btn btn-success mb-2">Crear Usuario</a>
    </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">Opciones</th>
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
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>