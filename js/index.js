
  $(document).ready(function(){
  
    $("#btnModal").click(function(){
        
        $("#iUsuario").css("border-color", "midnightblue");
        $("#iContrasenia").css("border-color", "midnightblue");


    });



    $('#btnLogin').click(function(){
         
        if($('#iUsuario').val()==""){
            
            $('#iUsuario').popover({
                trigger: '',
                content: 'Usuario no valido',
                placement: 'right'
              })
              .popover('show');
              $("#iUsuario").css("border-color", "red");
        }else{
            $("#iUsuario").css("border-color", "green");

            if ($('#iContrasenia').val()=="") {
                $('#iContrasenia').popover({
                    trigger: '',
                    
                    content: 'Contraseña no valida',
                    placement: 'right'
                  })
                  .popover('show');
                  $("#iContrasenia").css("border-color", "red");
            }else{
                
               


                
                $("#iContrasenia").css("border-color", "green");
                let formData = new FormData();
                formData.append('validador', true);
                formData.append('iUsuario', $('#iUsuario').val());
                formData.append('iContrasenia', $('#iContrasenia').val());

                $.ajax({
                    url: "../../bd/usuario/iniciarSesion.php",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (respuesta) {
                        if (respuesta == true) {
                            
                            $(location).attr('href','../pages/usuarios/inicio.php')
                        } else {
                            alert("Usuario no registrado");
                        }


                    }
                });

              

            }

        }

    });
    

















  });


   
