<?php

class Log_check extends My_Model {

    public function logcheck($email) {
        $this->db->where('email', $email);
    //    $this->db->where('password', $password);
        $result = $this->db->get('login');
        if ($result->num_rows() > 0) {
            return $result->result();
        }
        return FALSE;
    }

}
?>
