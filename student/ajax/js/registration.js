$(document).ready(function() {

    var form = $('#form').formValid({
        fields: {
            "first_name": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the full name..!"
                }]
            },
            "mobile_number": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter the mobile number..!"
                }]
            },

            "password": {
                "required": true,
                "tests": [{
                    "type": "null",
                    "message": "Please enter your password..!"
                }]
            }
        }
    });
    form.keypress(300);
    $('button[type="submit"]').click(function() {
        form.test();

        if (form.errors() == 0) {
            if (!$('#grade').val() || $('#grade').val().length === 0) {
                swal({
                    title: "Error!",
                    text: "Please select your grade..!",
                    type: 'error',
                    timer: 1500,
                    showConfirmButton: false
                });
            } else {
                //start preloarder
                $('.someBlock').preloader();

                var formData = new FormData($("form#form")[0]);
                $.ajax({
                    url: "ajax/php/registration.php",
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

                        if (result.status == 'duplicate_email') {
                            $('#message').text(result.message);
                        } else if (result.status == 'duplicate_mobile_no') {
                            $('#message').text(result.message);
                        } else if (result.status == 'duplicate_student_id') {
                            $('#message').text(result.message);
                        } else if (result.status == 'error') {
                            $('#message').text(result.message);
                        } else {
                            window.swal({
                                title: "Please wait...!",
                                text: "it may take few seconds...!",
                                imageUrl: "images/tenor.gif",
                                showConfirmButton: false,
                                allowOutsideClick: false
                            });
                            setTimeout(function() {
                                window.location.replace("mobile-verify.php?id=" + result.id);

                            }, 1000);
                        }
                    }
                });
            }
        }
        return false;
    });
});