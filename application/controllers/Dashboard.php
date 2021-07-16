<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('absensi');
   }
   public function index()
   {
      $this->load->view('dashboard/header');
      $this->load->view('dashboard/dashboard');
      $this->load->view('dashboard/footer');
   }

   public function log()
   {
      $this->load->view('dashboard/header');
      $this->load->view('dashboard/log');
      $this->load->view('dashboard/footer');
   }

   public function checkin()
   {
      date_default_timezone_set("Asia/Jakarta");
      $datacheckin = [
         'id_user'       => $this->session->userdata('id'),
         'date'          => date('F j, Y'),
         'time'          => date('H:i:s'),
         'information'   => 'check-in',
         'status'        => 0
      ];

      $this->absensi->insertcheckin($datacheckin);
      $this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

      redirect('dashboard');
   }

   public function checkout()
   {
      date_default_timezone_set("Asia/Jakarta");
      $datacheckout = [
         'id_user'       => $this->session->userdata('id'),
         'date'          => date('F j, Y'),
         'time'          => date('H:i:s'),
         'information'   => 'check-out',
         'status'        => 0
      ];

      $this->absensi->insertcheckout($datacheckout);
      $this->session->set_flashdata('message', 'Entri kehadiran berhasil. Silahkan tunggu konfirmasi oleh administator.');

      redirect('dashboard');
   }

   public function pengajuan()
   {
      $this->load->view('dashboard/header');
      $this->load->view('pegawai/pengajuan');
      $this->load->view('dashboard/footer');
   }
}
