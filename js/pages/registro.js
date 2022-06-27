
  $(document).ready(function(){

    $('#btnDescartar').click(function(){
        alert("descartar?");
        $(location).attr('href','../../bd/usuario/descartar.php');
    
    });

    $('#btnListo').click(function(){
         
        if($('#iNombre').val()==""){
            
            $('#popNombre').popover({
                trigger: '',
                content: 'Falta nombre',
                placement: 'right'
              })
              .popover('show');
              $("#iNombre").css("border-color", "red");

        }else{
            $("#iNombre").css("border-color", "green");
        }



        if($('#iApellido').val()==""){
            $('#popApellido').popover({
                trigger: '',
                content: 'Falta apellido',
                placement: 'right'
              })
              .popover('show');
           
              $("#iApellido").css("border-color", "red");

        }else{
            $("#iApellido").css("border-color", "green");
        }

        if($('#iTelefono').val()==""){
            $('#popTelefono').popover({
                trigger: '',
                content: 'Falta teléfono',
                placement: 'right'
              })
              .popover('show');
            
              $("#iTelefono").css("border-color", "red");

        }else{
            $("#iTelefono").css("border-color", "green");
        }

        if($('#iPass1').val() !=  $('#iPass2').val()){

            alert("bien");

        }

        $(location).attr('href','../../pages/usuarios/registroFoto.php');







    });
    

















  });


   
