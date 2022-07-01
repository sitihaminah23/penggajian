<?php


class DataGaji extends CI_Controller{

public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses')!=='2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Anda belum login</strong> 
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span ria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('welcome');

		}
	}

	public function index()
	{

		$data['title'] = "Data Gaji";

		$pegawai=$this->session->userdata('id_pegawai'); 
		$data['pegawai'] = $this->db->query("SELECT data_pegawai.nama_pegawai,data_jabatan.nama_jabatan,data_jabatan.gaji_pokok,data_jabatan.tj_transport,data_jabatan.bonus
			FROM data_pegawai INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan
			WHERE data_pegawai.id_pegawai='$pegawai'
			ORDER BY data_pegawai.nama_pegawai DESC
			")->result();
		$this->load->view('templates_pegawai/header',$data);
		$this->load->view('templates_pegawai/sidebar');
		$this->load->view('pegawai/DataGaji',$data);
		$this->load->view('templates_pegawai/footer');
		
	}
}

?>

