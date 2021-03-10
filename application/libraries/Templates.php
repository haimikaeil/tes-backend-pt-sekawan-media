<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Templates {

    function __construct() {
        $this->CI =& get_instance();
        // $this->CI->load->model('m_login', 'bro');
    }

    function display($template=NULL, $data = NULL) {

        if($template!=NULL)

        // $user_login = $this->CI->session->userdata('user_login');

        $data['_content']   = $this->CI->load->view($template, $data, TRUE);
        $data['_header']    = $this->CI->load->view('template/header', $data, TRUE);
        $data['_footer']    = $this->CI->load->view('template/footer', $data, TRUE);
        $data['_sidebar']   = $this->CI->load->view('template/sidebar', $data, TRUE);
        $this->CI->load->view('template/template', $data);
    }

    function depan($template=NULL, $data = NULL) {
        if($template!=NULL)

        $data['_content'] = $this->CI->load->view($template, $data, TRUE);
        $data['_header'] = $this->CI->load->view('depan/header', $data, TRUE);
        $data['_footer'] = $this->CI->load->view('depan/footer', $data, TRUE);
        $data['_sidebar'] = $this->CI->load->view('depan/sidebar', $data, TRUE);
        $this->CI->load->view('depan/template', $data);
    }
    
}

?>
