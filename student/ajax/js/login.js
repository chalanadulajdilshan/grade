$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "student_id": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the Student Id..!"
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
            //start preloarder
            $('.someBlock').preloader();
            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "ajax/php/login.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {

                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    if (result.status == 'success') {
                        swal({
                            title: "Success!",
                            text: "You have successfully login!...",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("index.php");
                            }, 1500);
                        });

                    } else {
                        $('#message').text(result.message);
                    }
                }
            });
        }
        return false;
    });


});