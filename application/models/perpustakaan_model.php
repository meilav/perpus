<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perpustakaan_model extends CI_Model {
	var $table = "buku",
		$kd_buku = "kd_buku",
		$judul = "judul",
		$penerbit = "penerbit",
		$pengarang = "pengarang",
		$harga = "harga";

	public function tambah($data){
		return $this->db->insert($table,$data);
	}
	public function ambil($data){
		return $this->db->get($table,$data)->result();
	}


}