<?php 

class Contractor_Model extends CI_Model {

    public function get()
    {
            $query = $this->db->where("user_role = 2")->get("users");
            return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where("user_id =",$id)->get("users");
        return $query->row();
    }

    public function create($data)
    {
       $this->db->insert("projects", $data);
       $result = $this->db->insert_id();
       return $result;
    }

}

?>