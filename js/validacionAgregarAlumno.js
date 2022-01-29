$(function () {
    $.validator.setDefaults({
      submitHandler: function () {
       
         let email=$('#mail').val()
         $.ajax({
          url:'../../functions/abm_user.php',
          type:'POST',
          dataType:'JSON',
          data:{
            'verbo':'create',
            'firstname':$('#firstname').val(),
            'lastname':$('#lastname').val(),
            'document_type':$('#document_type').val(),
            'document':$('#document').val(),
            'code':$('#code').val(),
            'phone':$('#phone').val(),
            'email':$('#email').val(),
          },
           
            
          
        }).then(function(datos){
            console.log(datos);
        if(datos==1){
            $('#firstname').removeClass('is-valid');
            $('#lastname').removeClass('is-valid');
            $('#document_type').removeClass('is-valid');
            $('#document').removeClass('is-valid');
            $('#code').removeClass('is-valid');
            $('#phone').removeClass('is-valid');
            $('#email').removeClass('is-valid');


            $('#firstname').addClass('is-invalid');
            $('#lastname').addClass('is-invalid');
            $('#document').addClass('is-invalid');
            $('#document_type').addClass('is-invalid');
            $('#code').addClass('is-invalid');
            $('#phone').addClass('is-invalid');
            $('#email').addClass('is-invalid');


            document.getElementById('message').innerHTML='<div class="alert alert-warning alert-dismissible fade show" role="alert"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><strong>Error</strong>, el alumno ya se encuentra registrado <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
        }else{
            document.getElementById('message').innerHTML='<div class="alert alert-success d-flex align-items-center" role="alert">            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><div>El formulario ha sido enviado con exito</div></div>'
            $('btn-enviar').disabled=true;
            setTimeout(function(){window.location.replace("./panel.php")},1000)
            /*
            <div class="alert alert-success d-flex align-items-center" role="alert">            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><div>El formulario ha sido enviado con exito</div></div>
            <div class="alert alert-warning alert-dismissible fade show" role="alert"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><strong>Error</strong>, el alumno ya se encuentra registrado <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
          
          
          */
        }
        /*else if(datos==2){
          $('#mail').removeClass('is-invalid');
          $('#mail').addClass('is-invalid')
          document.getElementById('message').innerHTML=""
          document.getElementById('submit-button').disabled=false
              document.getElementById("form1").style.display="none"
              document.getElementById("form3").style.display="block"
        }
        else{
            $('#mail').removeClass('is-invalid');
            $('#mail').addClass('is-invalid')
            document.getElementById('message').innerHTML=""
            document.getElementById('submit-button').disabled=false
                document.getElementById("form1").style.display="none"
                document.getElementById("form2").style.display="block"
        }*/
        })
      }
    });
    $('#form1').validate({
      rules: {
         firstname:{
             required:true,
             minlength:3
         },
         lastname:{
            required:true,
            minlength:3
        },
        document:{
            required:true,
            minlength:8,
        },
        code:{
            required:true,
        },
        phone:{
            required:true,
            minlength:8,
        },
        email:{
            required:true,
            email:true
        },
        
      },
      messages: {
        firstname:{
            required:'Este campo es obligatorio',
            minlength:'El nombre ingresado no es valido'
        },
        lastname:{
            required:'Este campo es obligatorio',
            minlength:'El apellido ingresado no es valido'
        },
        document:{
            required:'Este campo es obligatorio',
            minlength:'El N° de documento ingresado no es valido'
            
        },
        code:{
            required:'Este campo es obligatorio'
        },
        phone:{
            required:'Este campo es obligatorio',
            minlength:'El N° de telefono ingresado no es valido'
        },
        email:{
            required:'Este campo es obligatorio',
            email:'El email ingresado no es valido'
        }
      
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        $(element).addClass('is-valid')
      }
    });
  });