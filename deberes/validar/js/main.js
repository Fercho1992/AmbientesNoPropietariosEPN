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
      required: "Ingresa tu nombre.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    }
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
        data: {"nombre": $("#formulario #nombre").val(),
              "email": $("#formulario #correo").val(),
              "noticias": noticias,
              "mensaje": $("#formulario #mensaje").val()}
      })
      .done(function(msg) {
        console.log("success");
        $("#success").html(msg)
        $('#contact-form').modal('hide')
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("fail: " + textStatus + " " + errorThrown);
        $("#error").html(textStatus)
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