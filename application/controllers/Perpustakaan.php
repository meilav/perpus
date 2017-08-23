<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('perpustakaan_model');

	}

	public function index()
	{
		$this->db->select('*');
		$this->db->from('buku');

		$result = $this->db->get()->result();
		$parameter['databuku'] = $result;

		$this->load->view('header');
		$this->load->view('homeperpustakaan',$parameter);		
		$this->load->view('footer');
		
	}

	function list_data(){

	}

	function edit(){

	}

	function hapus(){
		
	}


}
