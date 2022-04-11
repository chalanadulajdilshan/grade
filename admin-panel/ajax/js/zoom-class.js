$(document).ready(function() {

    //Create Class
    $('#create').click(function(event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Lesson Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your start date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_time').val() || $('#start_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your start time..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#meeting_id').val() || $('#meeting_id').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your meeting id..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#password').val() || $('#password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/zoom_class.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function(result) {

                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function() {
                        setTimeout(function() {
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

    //Update Class
    $('#update').click(function(event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#title').val() || $('#title').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Lesson Title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your start date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_time').val() || $('#start_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your start time..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#meeting_id').val() || $('#meeting_id').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your meeting id..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#password').val() || $('#password').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your password..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/zoom_class.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function(result) {

                    //remove preloarder
                    $('.someBlock').preloader('remove');

                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function() {
                        setTimeout(function() {
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