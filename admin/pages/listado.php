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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body background="../../images/backgrounds/fondopanel1.jpg">
<nav class="navbar navbar-expand-lg  fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Uñas azul</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Listado de alumnos</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link '.$item2.'" href="./panel.php">Volver</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../functions/close_session.php">Cerrar sesi&oacute;n</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br><br>
      <h1 style="color: aliceblue;">Alumnos</h1>















<div class="container">


  <?php
    include("../../config/conexion.php");
    $query="select s.id,s.firstname,s.lastname,s.document_type,s.document,s.phone,s.uid,u.email from students as s inner join users as u on u.id=s.uid order by firstname  ";
    $res=mysqli_query($link,$query);
    if(mysqli_num_rows($res)>0){
      echo '
      <table class="table table-primary table-striped table-hover">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Nombre</th>
  <th scope="col">Apellido</th>
  <th scope="col">N° de documento</th>
  <th scope="col">Acciones</th>

</tr>
</thead>





<tbody>';
      while($row=mysqli_fetch_array($res)){
        $row[1]=strtolower($row[1]);
        $row[2]=strtolower($row[2]);

        echo '<tr>
                <th scope="row">'.$row[0].'</th>
                <td>'.ucfirst($row[1]).'</td>
                <td>'.ucfirst($row[2]).'</td>
                <td>'.$row[4].'</td>
                <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop-'.$row[0].'">
                <i class="fas fa-trash"></i>
                </button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2'.$row[0].'">
                <i class="fas fa-phone"></i>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-'.$row[0].'">
                <i class="fas fa-eye"></i>
                </button>
                
              
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop-'.$row[0].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content  bg-danger">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel" style="color: aliceblue;">Eliminar alumno</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="color:aliceblue">
                        ¿Deseas eliminar permanentemente a <strong>'.ucfirst($row[1]).' '.ucfirst($row[2]).'</strong> ?
                      </div>
                      <div class="modal-footer">
                      <form action="../../functions/abm_user.php" method="POST">
                        <input type="hidden" name="uid" value='.$row[6].'>
                        <input type="hidden" name="verbo" value="delete">


                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-light">Eliminar</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                




                <div class="modal fade" id="staticBackdrop-2'.$row[0].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content  bg-success">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel" style="color: aliceblue;">Contacto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="color:aliceblue">
                      <i class="fab fa-whatsapp"></i> <strong>'.$row[5].'</strong>
                      <br>
                      <i class="fas fa-envelope"></i> <strong>'.$row[7].'</strong>
                      </div>
                      <div class="modal-footer">
                      <form action="../../functions/abm_user.php" method="POST">
                        <input type="hidden" name="uid" value='.$row[6].'>
                        <input type="hidden" name="verbo" value="delete">


                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-light">Eliminar</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
                
                
                
                </td>
             </tr>';
      }
      echo '</tbody>
      </table>';
    }else{
      echo '
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
      Todavia no se han cargado alumnos.
  </div>
</div>

      ';
    }

  ?>


</div>


</body>
</html>