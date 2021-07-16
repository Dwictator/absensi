<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

   <title>Registrasi Pegawai</title>
</head>

<body>
   <div class="container" style="margin-top: 50px">
      <div class="row">
         <div class="col-md-5 offset-md-3">

            <div class="card">
               <div class="card-body">
                  <div class="text-center">
                     <label>Registrasi</label>
                  </div>
                  <hr>
                  <div class="form-group">
                     <label>Nama Lengkap</label>
                     <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                  </div>
                  <button class="btn btn-register btn-block btn-info">Register</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
   <script>
      $(document).ready(function() {

         $(".btn-register").click(function() {

            var namalengkap = $("#namalengkap").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var passwordformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8192}$/;

            if (namalengkap.length == "") {

               Swal.fire({
                  type: 'warning',
                  title: 'Error',
                  text: 'Nama lengkap harap diisi!'
               });

            } else if (email.length == "") {

               Swal.fire({
                  type: 'warning',
                  title: 'Error',
                  text: 'Email Harap diisi!'
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
                  text: 'Password harap diisi!'
               });

            } else if (!password.match(passwordformat)) {

               Swal.fire({
                  type: 'warning',
                  title: 'Error',
                  text: 'Password harap diatas 6 karakter dengan setidaknya memiliki 1 digit angka, 1 kapital dan 1 huruf kecil!'
               });

            } else {

               $.ajax({

                  url: "<?php echo base_url('auth/register') ?>",
                  type: "POST",
                  data: {
                     "namalengkap": namalengkap,
                     "email": email,
                     "password": password
                  },

                  success: function(response) {

                     if (response == "success") {

                        Swal.fire({
                              type: 'success',
                              title: 'Registrasi Berhasil!',
                              text: 'Anda akan diarahkan ke halaman login!',
                              timer: 4000,
                              showCancelButton: false,
                              showConfirmButton: false
                           })
                           .then(function() {
                              window.location.href = "<?php echo base_url('auth') ?>";

                           });

                        $("#namalengkap").val('');
                        $("#email").val('');
                        $("#password").val('');

                     } else {
                        if (response == "0") {
                           Swal.fire({
                              type: 'error',
                              title: 'Error!',
                              text: 'Email Telah digunakan!'
                           });
                        }
                     }
                     console.log(response);
                  },

                  error: function(response) {
                     Swal.fire({
                        type: 'error',
                        title: 'Opps!',
                        text: 'server error!'
                     });
                  }

               })

            }

         });

      });
   </script>
</body>

</html>