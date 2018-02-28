<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends My_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ion_auth();
        $getdata['title'] = 'Profile';
        $getdata['userdetails'] = $this->Profiles->getdetails();
        $this->template->admin_render('admin/profile/index', $getdata);
    }

    public function Save() {
        $arr_formdata = $this->input->post();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './_assets/dist/img';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;
        $this->load->library('upload', $config);
        if (!$this->input->post('password')) {
            $arr_formdata['password'] = $this->input->post('old_password');
        }

        if ($this->upload->do_upload('image')) {
            $s = array('upload_data' => $this->upload->data());
            $img_name = $s['upload_data']['file_name'];
            if ($this->input->post('id')) {
                $arr_formdata['image'] = $img_name;
                $success = $this->Profiles->Editsave($arr_formdata);
                $this->session->set_flashdata('updatemessage', 'Updated successfully');
            }
        } else {
            if ($this->input->post('id')) {
                $pass = $this->input->post('password');
                $arr_formdata['password'] = $this->bcrypt->hash_password($pass);
                $success = $this->Profiles->Editsave($arr_formdata);
                $this->session->set_flashdata('updatemessage', 'Updated successfully');
            }
        }
        redirect('../admin/profile');
    }




}
