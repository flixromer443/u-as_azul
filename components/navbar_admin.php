<?php
   
    function navbar($i){
        $ref1="./panel.php";
        $ref2="./panel2.php";
        if($i==1){
            $item1="active";   
            $ref1="#";

        }elseif($i==2){
             $item2="active";
             $ref2="#";

        }
    
        echo '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Uñas azul</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link '.$item1.'" aria-current="page" href="'.$ref1.'">Alumnos</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link '.$item2.'" href="'.$ref2.'">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../functions/close_session.php">Cerrar sesi&oacute;n</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        ';
    }

?>