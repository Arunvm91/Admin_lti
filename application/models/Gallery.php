<?php

class Gallery extends My_Model {

    public function getdetails() {
         $query = $this->db->query("select image from gallery where status= 'Active' ");

        return $query->result();
    }
    public function getdetailshome() {
         $query = $this->db->query("select image from gallery where status= 'Active' LIMIT 8 ");

        return $query->result();
    }



}
?>
