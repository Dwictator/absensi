<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	//view login
	public function index()
	{
		$this->load->view('auth/login');
	}

	//view registrasi
	public function registration()
	{
		$this->load->view('auth/registration');
	}

	// fungsi register
	public function register()
	{
		$this->load->library('form_validation');
		$this->load->model('user');



		$data = array(
			'namalengkap' => $this->input->post('namalengkap'),
			'email'       => $this->input->post('email'),
			'password'    => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		);

		$this->form_validation->set_rules('email', 'Email', 'is_unique[users.email]');

		if ($this->form_validation->run() == FALSE) {
			echo "0";
		} else {
			$register = $this->user->register($data);

			if ($register) {
				echo "success";
			}
		}
	}
	//fungsi login
	public function login()
	{
		$this->load->model('user');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$check = $this->user->login($email, $password);

		if (!empty($check)) {
			foreach ($check as $user) {
				$session_data = array(
					'id' => $user->id,
					'email' => $user->email,
					'namalengkap' => $user->namalengkap,
				);

				$this->session->set_userdata($session_data);
			}
			echo "success";
		} else {
			echo "error";
		}
	}

	public function loginadmin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
	}
}
