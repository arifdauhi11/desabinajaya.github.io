<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

	public function index()
	{
		$data = array('container' => 'web/v_visimisi' );
		$this->load->view('web/staticweb', $data);	
	}

}

/* End of file visimisi.php */
/* Location: ./application/controllers/visimisi.php */