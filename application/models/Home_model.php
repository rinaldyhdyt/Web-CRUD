<?php 
	
	class Home_model extends CI_Model {

		function getAllBarang() {
			return $this->db->get('tb_barang')->result_array();
		}

		function tambahData() {
			$data = [
				'nama' => $this->input->post('nama', true),
				'jenis' => $this->input->post('jenis', true),
				'stok' => $this->input->post('stok', true),
				'description' => $this->input->post('descrip', true),
				'harga' => $this->input->post('harga', true)
			];

			$this->db->insert('tb_barang', $data);
		}

		function getId($id) {
			return $this->db->get_where('tb_barang', ['id' => $id])->row_array();
		}

		function editData($id) {
			$data = [
				'nama' => $this->input->post('nama', true),
				'jenis' => $this->input->post('jenis', true),
				'stok' => $this->input->post('stok', true),
				'description' => $this->input->post('descrip', true),
				'harga' => $this->input->post('harga', true)
			];

			$this->db->where('id', $id);
			$this->db->update('tb_barang', $data);
		}

		function hapusData($id) {
			$this->db->where('id', $id);
			$this->db->delete('tb_barang');
		}

		function cariData() {
			$search = $this->input->post('cariData', true);

			$this->db->like('nama', $search);
			$this->db->or_like('jenis', $search);
			$this->db->or_like('harga', $search);

			return $this->db->get('tb_barang')->result_array();
		}
	}
 ?>