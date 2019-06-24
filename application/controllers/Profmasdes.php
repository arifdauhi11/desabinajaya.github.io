<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profmasdes extends CI_Controller {

	public function index()
	{
		$data = array('container' => 'web/v_profmasdes' );
		$this->load->view('web/staticweb', $data);
	}

}

/* End of file profilmasyarakatdesa.php */
/* Location: ./application/controllers/profilmasyarakatdesa.php */