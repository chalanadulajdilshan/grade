jQuery(document).ready(function() {


    $("#update").click(function(event) {
        event.preventDefault();

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter name.",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter email..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#subject').val() || $('#subject').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter subject..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#username').val() || $('#username').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter username..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#sdk_key').val() || $('#sdk_key').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter sdk key  ..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#sdk_secret').val() || $('#sdk_secret').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please Enter sdk secret..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {

            //start preloarder
            $('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($('#form-data')[0]);

            $.ajax({
                url: "ajax/php/user.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(result) {

                    $('.someBlock').preloader('remove');

                    if (result.status === 'success') {
                        swal({
                            title: "success!",
                            text: "Your data updated successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false,
                        });
                        window.setTimeout(function() {
                            window.location.reload()
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });
});