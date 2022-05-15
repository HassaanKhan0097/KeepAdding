<?php 

class Projects_Model extends CI_Model {

    public function get()
    {
            $query = $this->db->get('projects');
            return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where("pro_id =",$id)->get("projects");
        return $query->row();
    }

    public function search($keyword, $business)
    {
        $this->db->like('pro_title', $keyword);
        $this->db->like('pro_business_owner', $business);
        $query = $this->db->get('projects');
        return $query->result();

        $query = $this->db->where("pro_id =",$id)->get("projects");
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