<?php

class Gallerys extends My_Model {

//list all and one
    public function get_all($id = 0) {
      if ($id === 0)
      {
        $query = $this->db->get('gallery');
        return $query->result();
      }
      $query = $this->db->get_where('gallery', array('id' => $id));
      return $query->row_array();
    }

//save and edit
    public function save($data ,$id=0) {
      if ($id == 0) {
            return $this->db->insert('gallery', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('gallery', $data);
        }

    }
//delete
public function Delete($id){
       $this->db->where('id', $id);
       return $this->db->delete('gallery');
}
}
?>
