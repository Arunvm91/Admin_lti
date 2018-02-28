<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Log_check');
        $this->load->model('admin/Gallerys');



    }

    public function index() {
        if ($this->session->userdata('Access')) {
            redirect('../admin/gallery');
        } else {
            $this->load->view('admin/index.php');
        }
    }

//login
    public function logincheck() {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
              $email = $this->input->post('email');
              $password = $this->input->post('password');
              $LoginCheck = $this->Log_check->logcheck($email);
              $CheckUserDetails= $LoginCheck[0];
              $stored_hash= $CheckUserDetails->password;
            if ($this->bcrypt->check_password($password, $stored_hash))
          {
            $this->session->set_userdata('Access', $CheckUserDetails);
            redirect('../admin/gallery');
          }
          else
          {
            $this->session->set_flashdata('ErrorMessage', 'Please enter validdata.');
            redirect('../admin', 'refresh');
          }
                  }
      }

//logout
    public function Logout() {
        $this->session->sess_destroy();
        redirect('../admin');
    }

//profile
    public function profile() {
        $this->ion_auth();
        $getdata['title'] = 'Profile';
        $getdata['userdetails'] = $this->Profiles->getdetails();
        $this->template->admin_render('admin/profile/index', $getdata);
    }

    public function dashboard() {
        $this->load->view('admin/dashboard.php');
    }

     public function gallery() {
        $this->ion_auth();
        $data['title'] = 'Gallery';
        $data['gallery_list']  = $this->Gallerys->get_all();
        $this->template->admin_render('admin/Gallery/index', $data);
    }






}
