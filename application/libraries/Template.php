<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

    protected $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function admin_render($content, $data = NULL) {

        
        $this->template['head'] = $this->CI->load->view('admin/_templates/head', $data, TRUE);
        $this->template['header'] = $this->CI->load->view('admin/_templates/header', $data, TRUE);
        $this->template['sider'] = $this->CI->load->view('admin/_templates/sider', $data, TRUE);
        $this->template['content'] = $this->CI->load->view($content, $data, TRUE);
        $this->template['footer'] = $this->CI->load->view('admin/_templates/footer', $data, TRUE);
        return $this->CI->load->view('admin/_templates/template', $this->template);
    }

}
