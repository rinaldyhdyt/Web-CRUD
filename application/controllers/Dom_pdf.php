<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dom_pdf extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->database();    
        $this->load->helper(array('url','form'));
    }
    public function index(){

    $data['data'] = $this->db->get('tb_barang')->result();

    $this->load->library('PdfGenerator');
    $this->load->view('laporan_pdf', $data);
    }
}