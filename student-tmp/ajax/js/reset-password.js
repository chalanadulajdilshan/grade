$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "reset_code": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the Reset Code..!"
                    }
                ]
            }, "new_password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the new Password..!"
                    }
                ]
            },
            "confirm_password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the Confirm Password..!"
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
                url: "ajax/php/reset-password.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
                    if (result.status == 'success') {
                        swal({
                            title: "Success!",
                            text: "password reset successfully!...",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("login.php");
                            }, 1500);
                        });

                    } else if (result.status == 'error_code') {
                        swal({
                            title: "Error!",
                            text: "Invalid reset code!...",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else if (result.status == 'error') {
                        swal({
                            title: "Error!",
                            text: "Password not matchr!...",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    }

                }
            });
        }
        return false;
    });


});