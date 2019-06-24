<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profwil extends CI_Controller {

	public function index()
	{
		$data = array('container' => 'web/v_profwil' );
		$this->load->view('web/staticweb', $data);
	}

}

/* End of file profwil.php */
/* Location: ./application/controllers/profwil.php */