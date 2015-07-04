$(document).ready(function() {

  $( "#formulario" ).validate({
     rules: {
        nombre: {
          required: true,
          minlength: 2
        },
        correo: {
          correo: true,
          required: true,
        },
        confirmar: {
          minlength: 3,
          maxlength: 400,
          required: true
        },
    },
    messages: {
    nombre: {
      required: "Ingresa tu nombre. Por favor",
      minlength:"Al menos 5 caracteres como minimo",
      maxlength:"Como maximo 25 caracteres"
    },
    mensaje:{
      required:"Este campo es obligatorio",
      minlength:"Al menos 5 caracteres como minimo",
      maxlength:"Como maximo 25 caracteres"
    },
  }
  });

  $("#guardar").on("click", function(){
    var $btn = $(this).button('loading')

    if( $( "#formulario" ).valid() ) {   
      var noticias = $("#formulario #confirmar").is(":checked") ? 1 : 0;
      $.ajax({
        url: 'rpc/rpc.php',
        type: 'post',
        // dataType: 'json',
        data: {
          "nombre": $("#nombre").val(),
              "email": $("#correo").val(),
              "mensaje": $("#mensaje").val()}
      })
      .done(function(msg) {
        console.log("mensaje");
        $("#mensaje").html(msg)
        $('#formulario').modal('hide')
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("ERROR: " + textStatus + " " + errorThrown);
        $("#mensaje").html(textStatus)
      })
      .always(function() {
        console.log("complete");
      });
    }
    $btn.button('reset')
  })
  $("#contact-form").on("hide.bs.modal", function(){
    $('#contacto')[0].reset();
  })
});