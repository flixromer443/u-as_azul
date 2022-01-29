
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 30rem; background-color:rgba(49, 68, 85, 0.400);">
     <div class="card-body">
       <h4 class="card-title " style="text-align:center; color:aliceblue">Agregar alumno</h4>
       <form action="../functions/user.php" method="POST" id="form1">
       <h5 class="card-title " style="color: aliceblue;" >Datos personales</h5>
        <div class="row" style="margin: 20px 20px 20px 20px">
            <div class="col-sm-6">
              <div class="form-group">
               <input class="form-control " style=" margin:10px 10px 10px 10px;" type="text" id="firstname" name="firstname" placeholder="Nombre">

              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control " style=" margin:10px 10px 10px 10px;" type="text" id="lastname" name="lastname"placeholder="Apellido">
              </div>  
            </div>
            <div class="col-sm-6">
            <select name="document_type" id="document_type" class="form-control" style=" margin:10px 10px 10px 10px;">
                <option value="1">DNI</option>
            </select>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control " style="margin:10px 10px 10px 10px;" type="text" id="document" name="document"placeholder="N° de documento" maxlength="8">
                </div>      
            </div>
           
        </div>

        
        <h5 class="card-title " style="color: aliceblue;">Contacto</h5>
        <div class="row" style="margin: 20px 20px 20px 20px">
            <h6 class="card-title " style="color: aliceblue;" >Telefono</h6>
            <div class="col-sm-4">
              
                  <div class="form-group">
                                    <input class="form-control input" style="width: 60px;" type="text" id="code" name="code" placeholder="011">
                  </div>            
              </div>
            <div class="col-sm-6">
              
                  <div class="form-group">
                                    <input class="form-control input" type="text" id="phone" name="phone"placeholder="********" maxlength="8">
                  </div>            
              </div>
           
           
        </div>
        <div class="row" style="margin: 20px 20px 20px 20px">
        <h6 class="card-title " style="color: aliceblue;">Correo electronico</h6>
            <div class="col-sm-12">
                <div class="form-group">
                   <input class="form-control input" type="email" id="email" name="email"placeholder="***@gmail.com">
                  
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