<div class="container-fluid">
   <div class="card my-4">
      <h5 class="card-header">Entri Kehadiran</h5>
      <div class="card-body">
         <div class="form-group row">
            <h5 class="d-flex justify-content-center">
               <?php date_default_timezone_set("Asia/Jakarta");
               echo date('F j, Y H:i:s'); ?>
            </h5>
            <div class="justify-content-center">
               <div class="d-flex justify-content-center">
                  <form action="<?= base_url('dashboard/checkin') ?>">
                     <button type="submit" class="btn btn-success mx-2">Check-in</button>
                  </form>
                  <form action="<?= base_url('dashboard/checkout') ?>">
                     <button type="submit" class="btn btn-danger mx-2">Check-out</button>
                  </form>
               </div>
            </div>

         </div>
      </div>
   </div>