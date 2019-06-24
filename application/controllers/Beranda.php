<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{	
		$data = array('container' => 'web/v_beranda' );
		$this->load->view('web/staticweb', $data);	
	}
}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */