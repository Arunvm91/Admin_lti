<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('admin/gallerys');

    }
    public function form() {
        $this->ion_auth();
        $id = $this->uri->segment(3);
          if (empty($id))
          {
            $data['title'] = 'Gallery Form';
          }else{
            $data['title'] = 'Gallery Edit Form';
            $data['edit_item'] = $this->gallerys->get_all($id);
          }
       $this->template->admin_render('admin/Gallery/form', $data);
    }


    public function save() {
        $this->ion_auth();
        $this->form_validation->set_rules('description', 'description', 'trim|required|xss_clean');
              if ($this->form_validation->run() == True) {
                $this->session->set_flashdata('errormessage', 'invalid data!...');
                $this->template->admin_render('gallery/form', $data);
              } else {
                $arr_form_data=$this->input->post();
                $this->load->database();
                $this->load->helper(array('form', 'url'));
                $config['upload_path'] = './uploads/gallery';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_width'] = 2000;
                $config['max_height'] = 2000;
                $this->load->library('upload', $config);
                if($this->input->post('id')){
                  $id=$this->input->post('id');
                if ($this->upload->do_upload('image')) {
                    $id=$this->input->post('id');
                    $s = array('upload_data' => $this->upload->data());
                    $img_name = $s['upload_data']['file_name'];
                    $arr_form_data['image'] = $img_name;
                    $result = $this->gallerys->save($arr_form_data,$id);
                }
                else{
                  $id=$this->input->post('id');
                  $result = $this->gallerys->save($arr_form_data,$id);
                }
                }else{
            			 if ($this->upload->do_upload('image')) {
                    $s = array('upload_data' => $this->upload->data());
                    $img_name = $s['upload_data']['file_name'];
                    $arr_form_data['image'] = $img_name;
                    $result = $this->gallerys->save($arr_form_data);
                }
                else{
                  $result = $this->gallerys->save($arr_form_data);
                }
                }
                      if ($result == TRUE) {
                            if($this->input->post('id')){
                              $this->session->set_flashdata('updatemessage', 'update successfully');
                            }else{
                              $this->session->set_flashdata('addmessage', 'added successfully');
                            }
                          redirect('../admin/gallery');
                      } else {
                          $this->session->set_flashdata('errormessage', 'invalid data!...');
                          redirect('../gallery/form');
                        }
              }
        $this->template->admin_render('admin/gallery/form', $data);
    }

    public function Delete()
    {
        $id=$this->input->post('id');
        $result=$this->gallerys->Delete($id);
        if ($result == TRUE) {
              $response['status']='success';
              $response['message']='Deleted Successfully';
        } else {
          $response['status']='error';
          $response['message']='invalid data!...';
          }
        echo json_encode($response);
    }





}
