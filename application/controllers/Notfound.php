<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
		$this->load->view('web/v_404');
	}

}

/* End of file notfound.php */
/* Location: ./application/controllers/notfound.php */