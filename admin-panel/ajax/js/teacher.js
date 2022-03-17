$(document).ready(function () {

    //create Accommodation
    $('#create').click(function (event) {
        event.preventDefault(); 

        if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Full Name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#nic_number').val() || $('#nic_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter NIC Number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#mobile_number').val() || $('#mobile_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter mobile number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Email Address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#city-bar').val() || $('#city-bar').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#username ').val() || $('#username').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter username..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            }); 
        } else if (!$('#password ').val() || $('#password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            }); 
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/teacher.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    //remove preloarder
                    $('.someBlock').preloader('remove');

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
        }
    });
    
    
    //Update Accommodation
    $('#update').click(function (event) {
        event.preventDefault(); 

        if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Full Name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#nic_number').val() || $('#nic_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter NIC Number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#mobile_number').val() || $('#mobile_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter mobile number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Email Address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#city-bar').val() || $('#city-bar').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#username ').val() || $('#username').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter username..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            }); 
       
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/teacher.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {

                    //remove preloarder
                    $('.someBlock').preloader('remove');

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
        }
    });
});