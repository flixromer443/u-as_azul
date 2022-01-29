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
<body background="../images/backgrounds/bg.jpg" style="background-repeat: no-repeat; background-attachment: fixed;">

    <?php
        include("../config/conexion.php");
    
        include("../components/navbar.php");
        navbar(2);
        include("../components/card.php");
        
        echo '<br><br><br>
             <div class="container">
             <div class="container">
             <div class="container">

             
                <div class="row" style="margin-left:50px">';
                    $query="select * from courses";
                    $res=mysqli_query($link,$query);
                    while($row=mysqli_fetch_array($res)){
                        echo'<div class="col-sm-2" style="margin:20px 20px 20px 20px;">'.card($row[3],$row[1],$row[2]).'</div>';                        
                    }
               echo '</div>
             </div>
             </div>
             </div>
        ';    
    ?>
    

</body>
</html>