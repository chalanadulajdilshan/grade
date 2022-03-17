$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "first_name": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the full name..!"
                    }
                ]
            },
            "mobile_number": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the mobile number..!"
                    }
                ]
            },
            "email": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the email..!"
                    },
                    {
                        "type": "email",
                        "message": "Please enter the valid email..!"
                    }
                ]
            },
            "password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your password..!"
                    }
                ]
            }
        }
    });

    form.keypress(300);

    $('button[type="submit"]').click(function () {
        form.test();
        if (form.errors() == 0) {
            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "ajax/php/registration.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
                    if (result.status == 'error') {
                        $('#message').text(result.message);
                    } else {
                        window.swal({
                            title: "Please wait...",
                            text: "until we create your account",
                            imageUrl: "assets/images/tenor.gif",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        window.location.replace("mobile-verify.php?id=" + result.id);
                    }
                }
            });
        }
        return false;
    });


});