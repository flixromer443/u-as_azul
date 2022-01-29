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
    <title>Document</title>
</head>
<body background="./images/backgrounds/bg.jpg" style="background-repeat: no-repeat; background-attachment: fixed;">

    
    <?php
        include("./components/navbar.php");
        include("./components/carrousel.php");
        navbar(1);

        $img1="https://okdiario.com/img/2021/09/17/perro-655x368.jpg";
        $img2="https://www.hola.com/imagenes/estar-bien/20190820147813/razas-perros-pequenos-parecen-grandes/0-711-550/razas-perro-pequenos-grandes-a.jpg?filter=w500";
        $img3="https://www.hola.com/imagenes/estar-bien/20190215137141/razas-perro-pequenos-gt/0-645-998/perros-miniatura-a.jpg";


        carrousel($img1,$img2,$img3);

    ?>

</body>
</html>