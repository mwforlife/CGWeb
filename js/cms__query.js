$(document).ready(function() {
    $("#team-form").on("submit", function(e) {
        e.preventDefault();

        var name = $("#team-name").val();
        var lastname = $("#team-lastname").val();
        var email = $("#team-email").val();
        var phone = $("#team-phone").val();
        var place = $("#team-place").val();
        var group = $("#team-group").val();
        var foto = $("#foto").prop("files")[0];

        if (name.length < 3) {
            $("#team-name").css("border", "1px solid red");
            $("#team-name").focus();
            return false;
        }

        if (lastname.length < 3) {
            $("#team-lastname").css("border", "1px solid red");
            $("#team-lastname").focus();
            return false;
        }

        if (place.length < 3) {
            $("#team-place").css("border", "1px solid red");
            $("#team-place").focus();
            return false;
        }

        if (group == 0) {
            $("#team-group").css("border", "1px solid red");
            $("#team-group").focus();                   
            return false;
        }

        if (email.length < 3) {
            $("#team-email").css("border", "1px solid red");
            $("#team-email").focus();
            return false;
        }

        if (phone.length < 9) {
            $("#team-phone").css("border", "1px solid red");
            $("#team-phone").focus();
            return false;
        }

        if (foto == undefined) {
            $("#foto").css("border", "1px solid red");
            $("#foto").focus();
            return false;
        }

        if (foto.size > 2000000) {
            $("#foto").css("border", "1px solid red");
            $("#foto").focus();
            return false;
        }

        var data = new FormData($("#team-form")[0]);

        $.ajax({
            url: '../Back/View/insert/InsertEquipoDirectivo.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: data,
            success: function(response) {
                $("#team-form").html(response);
            },
            error: function(response) {
                $("#team-form").html(response);
            }

        });
    });
});