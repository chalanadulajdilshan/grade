$(document).ready(function() {

    //Update class
    $('#create').click(function(event) {
        event.preventDefault();
        tinymce.triggerSave();

        if (!$('#subject_name').val() || $('#subject_name').val().length === 0) {
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
        } else if (!$('#class_type').val() || $('#class_type').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Class Type..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_date').val() || $('#start_date').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Class Start Date..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#start_time').val() || $('#start_time').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Class Start Time..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#duration ').val() || $('#duration').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Class Duration..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#payment_method ').val() || $('#payment_method').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your Payment Method..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            $('.someBlock').preloader();

            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/add_class.php",
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