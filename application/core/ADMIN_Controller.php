<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ADMIN_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->user    = $this->session->userdata('user_login');
        
        date_default_timezone_set("Asia/Jakarta");

        $this->load->model('M_global', 'global');

    }



}

/* End of file PESAN_Controller.php */
/* Location: ./application/core/PESAN_Controller.php */
