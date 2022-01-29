<?php
   
    function navbar($i){
        $ref1="../index.php";
        $ref2="./pages/cursos.php";
        $ref3="./pages/iniciar_sesion.php";
        if($i==1){
            $item1="active";   
            $ref1="#";

        }elseif($i==2){
             $item2="active";
             $ref2="#";
             $ref3="./iniciar_sesion.php";

        }elseif($i==3){
            $item3="active";
            $ref2="./cursos.php";
            $ref3="#";
            
        }
    
        echo '
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Uñas azul</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link '.$item1.'" aria-current="page" href="'.$ref1.'">Home</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link '.$item2.'" href="'.$ref2.'">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link '.$item3.'" href="'.$ref3.'">Iniciar sesi&oacute;n</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        ';
    }

?>