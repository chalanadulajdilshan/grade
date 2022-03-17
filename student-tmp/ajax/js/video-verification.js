


window.onload = function () {

    var payment_method = $('#payment_method').val();

    if (payment_method == 2) {

        var student_id = $('#student_id').val();
        var lesson_id = $('#lesson_id').val();
        var time_duration = $('#time_duration').val();
        var cal = time_duration * 60 * 60;
      

        $('#countdown').timeTo(cal, function () {
            swal({
                title: "Oops..!",
                text: "Your time is over..! Thank for watch the lesson..",
                type: "warning"
            }, function () {
                window.location = "authorized.php";
            });
        });


        $.ajax({
            url: "ajax/php/video-verification.php",
            type: "POST",
            data: {
                student_id: student_id,
                lesson_id: lesson_id,
                action: 'CREATE'
            },
            dataType: "JSON",
            success: function (jsonStr) {


            }
        });
    }
}



