<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_model
{

   public function insertcheckin($datacheckin)
   {
      $this->db->insert('absensi', $datacheckin);
   }

   public function insertcheckout($datacheckout)
   {
      $this->db->insert('absensi', $datacheckout);
   }
}
