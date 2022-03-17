$(document).ready(function () {
    $('.pro_img').change(function () {
        
        //start preloarder
        $('.someBlock').preloader();

        var formData = new FormData($('#form-data')[0]);
        $.ajax({
            url: "ajax/php/profile.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess) {
                $(".main-img").attr("src", "../../upload/student/profile/" + mess.filename);
            },
            cache: false,
            contentType: false,
            processData: false
        });
        //remove preloarder
        $('.someBlock').preloader('remove');
    });


    //update profile info
    $('#update-info').click(function (event) {
        event.preventDefault(); 
        
        //start preloarder
        $('.someBlock').preloader();


        var formData = new FormData($('#form-data-info')[0]);

        $.ajax({
             url: "ajax/php/profile.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {
                swal({
                    title: "Success!",
                    text: "Your changes saved successfully!...",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                }, function () {
                    setTimeout(function () {
                        window.location.reload();
                    }, 1500);
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });
        //remove preloarder
        $('.someBlock').preloader('remove');
    });

//change Pw
    $('#change_password').click(function (event) {
        event.preventDefault();

        if (!$('#old_password').val() || $('#old_password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your old password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#new_password').val() || $('#new_password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your new password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#con-password').val() || $('#con-password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your confirm password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();


            var formData = new FormData($('#form-data-pw')[0]);
            $.ajax({
                url: "ajax/php/profile.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    if (result.status == 'success') {
                        swal({
                            title: "Success!",
                            text: "Your changes saved successfully!...",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }, function () {
                            setTimeout(function () {
                                window.location.replace("./log-out.php");
                            }, 1500);
                        });
                    } else if (result.status == 'error') {
                        swal({
                            title: "Error!",
                            text: "Some error Check again..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else if (result.status == 'error_old_pw_not_match') {
                        swal({
                            title: "Error!",
                            text: "Old Password does not match..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else if (result.status == 'error_pw_not_match') {
                        swal({
                            title: "Error!",
                            text: "Password and confirm password does not match..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    }
                    //remove preloarder
                    $('.someBlock').preloader('remove');
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

});

