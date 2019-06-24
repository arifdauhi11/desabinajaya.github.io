<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function index()
	{
		$data = array('container' => 'web/v_sejarah' );
		$this->load->view('web/staticweb', $data);		
	}

}

/* End of file sejarah.php */
/* Location: ./application/controllers/sejarah.php */