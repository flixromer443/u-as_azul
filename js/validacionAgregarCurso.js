$(function () {
    $.validator.setDefaults({
      
    });
    $('#form1').validate({
      rules: {
         name:{
             required:true,
             minlength:3
         },
         description:{
            required:true,
            minlength:5
        },
        photo:{
            required:true
        }
      },
      messages: {
        name:{
            required:'Este campo es obligatorio',
            minlength:'El nombre ingresado no es valido'
        },
        description:{
            required:'Este campo es obligatorio',
            minlength:'El apellido ingresado no es valido'
        },
        photo:{
            required:'Este campo es obligatorio',
        },
        
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