<?php 

class Channels_Model extends CI_Model {

    public function get()
    {
            $query = $this->db->get('channels');
            return $query->result();
    }

    // public function getById($id)
    // {
    //     $query = $this->db->where("pr_id =",$id)->get("products");
    //     return $query->row();
    // }

    public function create($data)
    {
       $this->db->insert("channels", $data);
       $result = $this->db->insert_id();
       return $result;
    }

}

?>