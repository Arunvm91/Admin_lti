<?php

class Profiles extends My_Model {

    public function getdetails() {
        $query = $this->db->get(" login where  id= '1' ");
        return $query->result();
    }

//save
    public function save($data) {
        $query = $this->db->insert('login', $data);
        return $query;
    }

//update
    public function EditSave($dataedit) {
        $i = $dataedit['id'];
        $this->db->where('id', $i);
        $this->db->update('login', $dataedit);
        $t = $this->db->affected_rows();
        return $t;
    }

}
?>
