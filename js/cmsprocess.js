window.onload = function(){
    $(".img").hide();
           $(".video").hide();
           $(".send").hide();
}

$("#foto").change(function(){
   vistaprevia(this); 
});

function vistaprevia(imagen){
    if(imagen.files && imagen.files[0]){
        var reader = new FileReader(); 
        reader.onload = function (e) {
          $('#previa').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(imagen.files[0]);

    }
}

function cambiar(){
    var valor = $("#tipo_content").val();
    if(valor==0){
        $(".img").hide();
           $(".video").hide();
           $(".send").hide();
       swal.fire("¡Oh Oh!", "Seleccione una opcion","warning");
       }else if(valor==1){
        $(".img").show();
           $(".send").show();
           $(".video").hide();
        }else{
        $(".video").show();
           $(".send").show();
           $(".img").hide();
        }
}