<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('perpustakaan_model');

	}

	public function index()
	{
		$parameter['title'] = 'Perpustakaan';
		$this->load->view('header');
		$this->load->view('homeperpustakaan',$parameter);		
		$this->load->view('footer');
		
	}

	function list_data(){
		$this->db->select('*');
		$this->db->from('buku');

		$result = $this->db->get()->result(); //mengambil data menjadikannya objek
		$no = 0;
      foreach ($result as $key => $value) {
      $no++;
      $id = $value->kd_buku;
      echo '<tr>
        <td>'. $no.'</td>
        <td>'. $value->judul .'</td>
        <td>'. $value->pengarang .'</td>
        <td>'. $value->penerbit .'</td>
        <td>'. $value->harga .'</td>

         <td><a onclick="ubah('.$id.')" class="btn btn-primary" style="margin:3px;"><i class="fa fa-edit"> Edit </i></a>
            <a onclick="hapus('.$id.')" class="btn btn-danger" style="margin:3px;"><i class="fa fa-close"> Delete </i></a>
            <button class="btn btn-warning" style="margin:3px;"><i class="fa fa-print"> Print </i></button></td>
      </tr>';
      }
	}

	function tambah(){
		$judul = $this->input->post('judul');
		$penerbit = $this->input->post('penerbit');
		$pengarang = $this->input->post('pengarang');
		$harga = $this->input->post('harga');

		$data = array(
			'judul' => $judul,
			'penerbit' => $penerbit,
			'pengarang' => $pengarang,
			'harga' => $harga
			);

		$insert = $this->db->insert('buku',$data);
		echo json_encode(array("Status" => TRUE));
	}

	function edit($id){
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->where('kd_buku',$id);
		$query = $this->db->get()->row_array();

		// ->row: satu baris data bentuk objek
		// ->row_array: satu baris data diubah ke array
		// ->result: ambil semua baris data bentuk objek
		// ->result_array: ambil semua data diubah array

		echo json_encode($query);
		// echo json_encode(array("Status" => TRUE));

	}

	function update(){
		$kd_buku = $this->input->post('kd_buku');
		$judul = $this->input->post('judul');
		$penerbit = $this->input->post('penerbit');
		$pengarang = $this->input->post('pengarang');
		$harga = $this->input->post('harga');

		$data = array(
			'judul' => $judul,
			'penerbit' => $penerbit,
			'pengarang' => $pengarang,
			'harga' => $harga,
		);
		$this->db->where('kd_buku',$kd_buku);
		$update = $this->db->update('buku',$data);

		echo json_encode(array("Status" => TRUE));
	}

	function hapus($id){
		$this->db->where('kd_buku',$id);
		$this->db->delete('buku');

		echo json_encode(array("Status" => TRUE));	
	}





}