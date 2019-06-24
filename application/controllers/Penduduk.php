<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_penduduk');
        $this->load->helper('url');
	}

	public function index()
	{
		$data = array('container' => 'web/v_penduduk' );
		$data['penduduk'] = $this->m_penduduk->tampil_data()->result();
		$this->load->view('web/staticweb', $data);	
	}
}

/* End of file penduduk.php */
/* Location: ./application/controllers/penduduk.php */