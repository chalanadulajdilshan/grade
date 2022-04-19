$(document).ready(function() {
    $("#addPayment").click(function(event) {
        event.preventDefault();


        if (!$("#slip_image").val() || $("#slip_image").val().length === 0) {
            swal({
                title: "Error!",
                text: "Please attach your slip image..!",
                type: "error",
                timer: 3000,
                showConfirmButton: false,
            });
        } else {
            //start preloarder
            $(".someBlock").preloader();

            var formData = new FormData($("#form-data")[0]);
            $.ajax({
                url: "ajax/php/payment.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: "json",
                success: function(result) {
                    //remove preloarder
                    $(".someBlock").preloader("remove");

                    swal({
                            title: "Success!",
                            text: "Your changes saved successfully!...",
                            type: "success",
                            timer: 2000,
                            showConfirmButton: false,
                        },
                        function() {
                            setTimeout(function() {
                                window.location.reload();
                            }, 1500);
                        }
                    );
                },
                cache: false,
                contentType: false,
                processData: false,
            });
        }
    });
});