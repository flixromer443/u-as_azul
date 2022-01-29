<?php
    function card($img,$name,$info){
        echo '
        <div class="card" style="width: 18rem;">
        <img src="'.$img.'"class="img-fluid" widclass="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$name.'</h5>
          <p class="card-text">'.$info.'</p>
          <a href="#" class="btn btn-primary">Inscribirme</a>
        </div>
      </div>
        
        ';
    }

?>