$(document).ready(function() {
    $('#login-form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(data) {
                if (data.status == 'success') {
                    window.location.href = data.url;
                } else {
                    $('#login_message').html(data.message);
                }
            }
        });
    });
});