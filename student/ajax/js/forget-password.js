 $(document).ready(function() {


     $("#change").click(function(event) {
         event.preventDefault();

         if (!$('#mobile_number').val() || $('#mobile_number').val().length === 0) {

             swal({
                 title: "Error!",
                 text: "Please enter mobile number..!",
                 type: 'error',
                 timer: 2500,
                 showConfirmButton: false
             });
         } else {

             $('.someBlock').preloader();
             var formData = new FormData($("form#form")[0]);
             $.ajax({
                 url: "ajax/php/forget-password.php",
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

                     if (result.status == 'success') {
                         window.swal({
                             title: "Please wait...!",
                             text: "it may take few seconds...!",
                             imageUrl: "assets/images/tenor.gif",
                             showConfirmButton: false,
                             allowOutsideClick: false
                         });
                         setTimeout(function() {
                             window.location.replace("reset-password.php?message=19");
                         }, 1500);
                     } else {
                         swal({
                             title: "Error!",
                             text: "Please enter correct verification code..!",
                             type: 'error',
                             timer: 2000,
                             showConfirmButton: false
                         });
                     }
                 }
             });
         }

     });

 });