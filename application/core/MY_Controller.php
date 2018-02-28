<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('javascript');
        $this->load->library(array('form_validation', 'template'));
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->helper('form');
        $this->load->model('admin/Profiles');




    }

//check access
    public function CheckAccess() {
        if (!$this->session->userdata('Access')) {
            redirect('../admin', 'refresh');
        }
    }

    public function ion_auth() {
        $this->CheckAccess();

    }



    public function page404() {
        $this->template->admin_render('admin/_templates/404');
    }

}
