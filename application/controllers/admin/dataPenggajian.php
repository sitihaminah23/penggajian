<?php 

	class dataPenggajian extends CI_Controller{

		public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses')!=='1'){
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
		$data['title'] = "Data Gaji Pegawai";
		$data['gaji'] = $this->db->query("SELECT data_pegawai.nik, data_pegawai.nama_pegawai,data_pegawai.jenis_kelamin, data_jabatan.nama_jabatan, data_jabatan.gaji_pokok, data_jabatan.tj_transport, data_jabatan.bonus FROM data_pegawai INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan ORDER BY data_pegawai.nama_pegawai ASC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dataPenggajian',$data);
		$this->load->view('templates_admin/footer');
	}


}
 ?>




 