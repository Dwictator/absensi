<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

   <title>Login Akun</title>
</head>

<body>
   <div class="container" style="margin-top: 50px">
      <div class="row">
         <div class="col-md-5 offset-md-3">

            <div class="card">
               <div class="card-body">
                  <div class="text-center">
                     <label>LOGIN</label>
                  </div>
                  <hr>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                  </div>
                  <button class="btn btn-login btn-block btn-info">LOGIN</button>
               </div>
            </div>

            <div class="text-center" style="margin-top: 15px">
               <a class="text-decoration-none" href="#">Forgot Password</a>
            </div>
            <div class="text-center" style="margin-top: 15px">
               <a class="text-decoration-none" href="<?php echo base_url('auth/registration') ?>">Registration</a>
            </div>

         </div>
      </div>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
   <script>
      $(document).ready(function() {

         $(".btn-login").click(function() {

            var email = $("#email").val();
            var password = $("#password").val();
            var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

            if (email.length == "") {

               Swal.fire({
                  type: 'warning',
                  title: 'Error',
                  text: 'Email Wajib Diisi !'
               });

            } else if (!email.match(mailformat)) {

               Swal.fire({
                  type: 'warning',
                  title: 'Error',
                  text: 'Isikan field email sesuai format email!'
               });

            } else if (password.length == "") {

               Swal.fire({
                  type: 'warning',
                  title: 'Error',
                  text: 'Password Wajib Diisi !'
               });

            } else {

               $.ajax({
                  url: "<?php echo base_url('auth/login') ?>",
                  type: "POST",
                  data: {
                     "email": email,
                     "password": password
                  },

                  success: function(response) {
                     if (response == "success") {
                        Swal.fire({
                              type: 'success',
                              title: 'Login Berhasil!',
                              text: 'Anda akan di arahkan dalam 3 Detik',
                              timer: 3000,
                              showCancelButton: false,
                              showConfirmButton: false
                           })
                           .then(function() {
                              window.location.href = "<?php echo base_url('dashboard') ?>";
                           });

                     } else {

                        Swal.fire({
                           type: 'error',
                           title: 'Login Gagal!',
                           text: 'silahkan coba lagi!'
                        });
                     }

                     console.log(response);

                  },

                  error: function(response) {

                     Swal.fire({
                        type: 'error',
                        title: 'Opps!',
                        text: 'server error!'
                     });

                     console.log(response);

                  }

               });

            }

         });

      });
   </script>
</body>

</html>