<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_penduduk');
        $this->load->helper('url');
        $this->auth();
	}

	function auth(){
		if (!$this->session->userdata('authenticated')) // Jika tidak ada / artinya belum login
        redirect('login'); // Redirect ke halaman login
	}

	function index(){
		$data = array('container' => 'admin/v_dashboard');
		$data['penduduk'] = $this->m_penduduk->tampil_data()->result();
		$this->load->view('admin/static',$data);
	}

	function tambah(){
		$data = array('container' => 'admin/v_input');
		$this->load->view('admin/static',$data);
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$jenkel = $this->input->post('jenkel');
		$umur = $this->input->post('umur');

		$data = array(
			'nama' => $nama,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'jenkel' => $jenkel,
			'umur' => $umur
			);
		$this->m_penduduk->input_data($data,'penduduk');
		redirect('admin');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_penduduk->hapus_data($where,'penduduk');
		redirect('admin');
	}

	function edit($id){
		$data = array('container' => 'admin/v_edit');
		$where = array('id' => $id);
		$data['penduduk'] = $this->m_penduduk->edit_data($where,'penduduk')->result();
		$this->load->view('admin/static',$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$jenkel = $this->input->post('jenkel');
		$umur = $this->input->post('umur');
	 
	$data = array(
		'nama' => $nama,
		'agama' => $agama,
		'pekerjaan' => $pekerjaan,
		'jenkel' => $jenkel,
		'umur' => $umur
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_penduduk->update_data($where,$data,'penduduk');
	redirect('admin');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */