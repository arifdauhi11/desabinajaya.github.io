<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemdes extends CI_Controller
{

    public function index()
    {
        $data = array('container' => 'web/v_pemdes');
        $this->load->view('web/staticweb', $data);
    }
}

/* End of file notfound.php */
/* Location: ./application/controllers/notfound.php */
