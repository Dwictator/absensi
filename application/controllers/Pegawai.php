<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('absensi');
	}

	public function pengajuan()
	{
		$post = $this->input->post();
		$data = [
			'id_user' => $this->session->userdata('id'),
			'tipe' => $post['tipe'],
			'tanggal_mulai' => $post['tanggal_mulai'],
			'tanggal_selesai' => $post['tanggal_selesai'],
			'keterangan' => $post['keterangan'],
		];

		$this->absensi->pengajuan($data);
		$this->session->set_flashdata('message', 'Pengajuan berhasil. Silahkan tunggu konfirmasi oleh administator.');
		redirect('dashboard/pengajuan');
	}
}
