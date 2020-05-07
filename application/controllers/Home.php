<?php 
	
	class Home extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('Home_model');
			$this->load->library('form_validation');

			if ($this->session->userdata('status') != "login") {
				redirect('login');
			}
		}

		function index() {
			$data['judul'] = 'Home';
			$data['barang'] = $this->Home_model->getAllBarang();

			if ( $this->input->post('cariData') ) {
				$data['barang'] = $this->Home_model->cariData();
			}

			$this->load->view('templates/header', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer');
		}

		function formTambah() {
			$data['judul'] = 'Tambah Data';

			$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
			$this->form_validation->set_rules('jenis', 'Jenis Produk', 'required');
			$this->form_validation->set_rules('stok', 'Stok Produk', 'required');
			$this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
			$this->form_validation->set_rules('descrip', 'Deskripsi Produk', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('templates/header', $data);
				$this->load->view('home/tambah_data');
				$this->load->view('templates/footer');
			} else {
				$this->Home_model->tambahData();
				$this->session->set_flashdata('alert', 'Ditambahkan');
				redirect('home');
			}
		}

		function detail($id) {
			$data['judul'] = 'Detail Barang';

			$data['barang'] = $this->Home_model->getId($id);

			$this->load->view('templates/header', $data);
			$this->load->view('home/detail', $data);
			$this->load->view('templates/footer');
		}

		function editData($id) {
			$data['judul'] = 'Edit Barang';

			$data['barang'] = $this->Home_model->getId($id);
			$data['jenis'] = ['Makanan', 'Minuman', 'Elektronik', 'Lainnya'];

			$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
			$this->form_validation->set_rules('jenis', 'Jenis Produk', 'required');
			$this->form_validation->set_rules('stok', 'Stok Produk', 'required');
			$this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
			$this->form_validation->set_rules('descrip', 'Deskripsi Produk', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('templates/header', $data);
				$this->load->view('home/edit', $data);
				$this->load->view('templates/footer');
			} else {
				$this->Home_model->editData($id);
				$this->session->set_flashdata('alert', 'Diedit');
				redirect('home');
			}
		}

		function hapusData($id) {
			$this->Home_model->hapusData($id);
			$this->session->set_flashdata('alert', 'Dihapus');
			redirect('home');
		}

		function report() {
			$data['judul'] = 'Report Barang PDF';
			$this->load->library('pdfgenerator');

			$data['barang'] = $this->Home_model->getAllBarang();

			$html = [
				$this->load->view('templates/header_report', $data),
				$this->load->view('home/report', $data),
				$this->load->view('templates/footer')
			];

			$this->pdfgenerator->generate($html, 'contoh');
			
		}

	}

 ?>