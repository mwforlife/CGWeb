var start = 
setTimeout(slide,5000);;
var item=1;
var click=0;

function slide(){
    var img1 = "img/fondo/prtada.jpg";
    var img2 = "img/fondo/portada3.jpg";

    if(item==1){
            $(".slider").css("background-image","url(img/fondo/prtada.jpg)");
            item++;
            setTimeout(slide,3000);
    }else{
            $(".slider").css("background-image","url(img/fondo/portada3.jpg)");
            item=1;
            setTimeout(slide,3000);
    }
}

function menu(){
    if(click==0){
        $(".header__menu").css("display","block");
        click=1;
    }else{
        $(".header__menu").css("display","none");
        click=0;
    }
}

$(document).ready(function() {
    $("#form-contact").on("submit", function(e) {
        e.preventDefault();
        OpenPreloader();
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#mensaje").val();
        var number = $("#phone").val();

        if (name.trim().length == 0 || email.trim().length == 0 || message.trim().length == 0 || number.trim().length == 0) {
            ClosePreloader();
            swal.fire("Error", "Todos los campos son obligatorios", "error");
            return;
        }

        var data = $("#form-contact").serialize();

        $.ajax({
            type: "POST",
            url: "Back/View/mail/contact.php",
            data: data,
            success: function(datos) {
                if (datos == "1") {
                    ClosePreloader();
                    $("#form-contact")[0].reset();
                    swal.fire("Exito", "Mensaje enviado correctamente \n A la Brevedad alguien se contactará contigo.", "success");
                }else{
                    ClosePreloader();
                    swal.fire("Error", datos, "error");
                }
            },
            error: function(datos) {
                ClosePreloader();
                swal.fire("Error", "Error al enviar el mensaje", "error");
            }
            
        });
    })
});