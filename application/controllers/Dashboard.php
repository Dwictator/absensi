<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
   //view dashboard
   public function index()
   {
      $this->load->view('dashboard/header');
      $this->load->view('dashboard/dashboard');
      $this->load->view('dashboard/footer');
   }
}
