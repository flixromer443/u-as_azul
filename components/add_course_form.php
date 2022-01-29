
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem; background-color:rgba(49, 68, 85, 0.400);">
     <div class="card-body">
       <h4 class="card-title " style="text-align:center; color:aliceblue">Agregar curso</h4>
       <form  method="POST" action="../../functions/abm_course.php" id="form1" name="form1" enctype="multipart/form-data">
        <div class="row" style="margin: 20px 20px 20px 20px">
            <div class="col-sm-12">
              <div class="form-group">
               <input class="form-control " style=" margin:10px 10px 10px 10px;" type="text" id="name" name="name" placeholder="Nombre del curso">

              </div>
            </div>
            <input type="hidden" name="verbo" value="create">
            <div class="mb-3">
              <div class="form-group">
                  <textarea class="form-control" placeholder="Descripcion..." name="description" id="description" style=" margin:10px 10px 10px 10px;"></textarea>
              </div>
            </div>
            <div class="col-sm-12">
            <h5 class="card-title " style="color: aliceblue;" >Foto(.jpg)</h5>

              <div class="form-group">

                <input type="file" class="form-control" name="photo" id="photo">
              </div>
            </div>
           
           
        </div>

        
        

























<div class="container">
<div id="message">
</div>
</div>




    
<div class="container">
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
<button class="btn btn-primary" id="btn-enviar"style="width: 300px; margin:auto;" type="submit" >Confirmar</button>

                </div>
            </div>
        </div>
    </div>
</div>
        
       
       </form>
     </div>
   </div>