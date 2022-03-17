$(document).ready(function() {

    //Create Class
    $('#create').click(function(event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Subject Name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#grade').val() || $('#grade').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Class Grade..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image_name').val() || $('#image_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your image name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/subjects.php",
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

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Subject Name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#grade').val() || $('#grade').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Class Grade..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/add-class.php",
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