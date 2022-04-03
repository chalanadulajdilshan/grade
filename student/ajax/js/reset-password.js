$(document).ready(function() {

    $("#change").click(function(event) {
        event.preventDefault();

        if (!$('#reset_code').val() || $('#reset_code').val().length === 0) {

            swal({
                title: "Error!",
                text: "Please enter reset code..!",
                type: 'error',
                timer: 2500,
                showConfirmButton: false
            });
        } else if (!$('#password').val() || $('#password').val().length === 0) {

            swal({
                title: "Error!",
                text: "Please enter new password..!",
                type: 'error',
                timer: 2500,
                showConfirmButton: false
            });
        } else if (!$('#confirmpassword').val() || $('#confirmpassword').val().length === 0) {

            swal({
                title: "Error!",
                text: "Please enter confirm password..!",
                type: 'error',
                timer: 2500,
                showConfirmButton: false
            });

        } else {

            $('.someBlock').preloader();
            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "ajax/php/reset-password.php",
                type: 'POST',
                data: formData,
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(result) {

                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    if (result.status == 'success') {
                        window.swal({
                            title: "Please wait...!",
                            text: "it may take few seconds...!",
                            imageUrl: "assets/images/tenor.gif",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        setTimeout(function() {
                            window.location.replace("login.php");
                        }, 1500);
                    } else {
                        swal({
                            title: "Error!",
                            text: "Please enter correct verification code..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }

    });



    var form = $('#form').formValid({
        fields: {
            "reset_code": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the Reset Code..!"
                }]
            },
            "new_password": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the new Password..!"
                }]
            },
            "confirm_password": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the Confirm Password..!"
                }]
            }
        }
    });

    form.keypress(300);

    $('button[type="submit"]').click(function() {
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
                success: function(result) {
                    if (result.status == 'success') {
                        swal({
                            title: "Success!",
                            text: "password reset successfully!...",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function() {
                            setTimeout(function() {
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