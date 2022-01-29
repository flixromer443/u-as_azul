<?php
    include("../config/conexion.php");
    switch($_POST['verbo']){
       case 'create':
           $nombre=$_FILES['photo']['name'];
           $save=$_FILES['photo']['tmp_name'];
           $name=$_POST['name'];
           $description=$_POST['description'];

           $ruta='../images/courses/'.$nombre;
            move_uploaded_file($save,$ruta);

            $stmt=mysqli_prepare($link,"INSERT INTO courses(name,description,images) values(?,?,?)");
            mysqli_stmt_bind_param($stmt,'sss',$name,$description,$ruta);
            mysqli_stmt_execute($stmt); 
            header("Location:../admin/pages/panel2.php");

        break;
        case 'delete':{
           $stmt=mysqli_prepare($link,"DELETE FROM users WHERE id=?");
            mysqli_stmt_bind_param($stmt,'i',trim($_POST['uid']));
            mysqli_stmt_execute($stmt); 
            header("Location:../admin/pages/listado.php");
        }
    }
?>