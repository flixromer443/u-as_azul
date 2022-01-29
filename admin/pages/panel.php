<?php
    session_start();
    if(!$_SESSION['admin']){
        header("Location:../../pages/iniciar_sesion.php");
    }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body background="../../images/backgrounds/fondopanel1.jpg">
  <?php
        include("../../components/navbar_admin.php");
        navbar(1);
  ?>
   <br>
   <div class="container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           Usted ha iniciado sesi&oacute;n como <strong><?php echo $_SESSION['admin']['email'];?></strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
   </div>

   <div class="container">
    <div class="container">
    <div class="container">
    <div class="container">
   <div class="row">
    <div class="col-sm-5 ">
    <div class="card text-white bg-primary mb-3 " style="max-width: 18rem;" onclick="window.location.replace('./listado.php')" >
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title  fuente">Listado de alumnos</h3>
            <p class="card-text" ></p>
        </div>
        </div>
    </div>
    
    <div class="col-sm-5">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;  " onclick="window.location.replace('./agregar_alumnos.php')" >
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente">Agregar alumnos</h3>
        </div>
        </div>
    </div>
    <div class="col-sm-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;  ">
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente">Editar alumnos</h3>
        </div>
        </div>
            </div>
            <div class="col-sm-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;  ">
        <div class="card-header"></div>
        <div class="card-body boton">
            <h3 class="card-title fuente">Eliminar alumnos</h3>
        </div>
        </div>
            </div>
   </div>
</div>
</div>
</div>
</div>

</body>
</html>









