<?php

class My_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // public function CheckLag() {
    //     // print_r($_SESSION);
    //     if ($this->session->userdata('Lag') == 'ar') {
    //         $CI = &get_instance();
    //         $this->db = $CI->load->database('aradic', TRUE);
    //     } elseif ($this->session->userdata('Lag') == 'dr') {
    //         $CI = &get_instance();
    //         $this->db = $CI->load->database('dari', TRUE);
    //     } else {
    //         //$CI = &get_instance();
    //         //$this->db = $CI->load->database('default', TRUE);
    //
    //     }
    // }

}
?>
