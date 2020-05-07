<?php 
	
	class Login extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('Login_model');
		}

		public function index() {
			$data['judul'] = 'Login';

			$this->load->view('templates/header_login', $data);
			$this->load->view('login/index');
			$this->load->view('templates/footer');
		}

		function aksiLogin() {
			$username = $this->input->post('user');
			$password = $this->input->post('pass');

			$where = [
				'username' => $username,
				'password' => $password
			];

			$cek = $this->Login_model->cekLogin("tb_login", $where)->num_rows();

			if ($cek > 0) {

				$data_session = [
					'status' => "login"
				];

				$this->session->set_userdata($data_session);

				redirect('home');
			} else {
				$this->session->set_flashdata('alert', 'Salah');
				redirect('login');
			}
		}

		function logout() {
			$this->session->sess_destroy();
			redirect('login');
		}
	}
 ?>