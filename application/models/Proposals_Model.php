<?php 

class Proposals_Model extends CI_Model {

    public function get()
    {
            $query = $this->db->get('proposals');
            return $query->result();
    }

    // public function getById($id)
    // {
    //     $query = $this->db->where("pr_id =",$id)->get("products");
    //     return $query->row();
    // }

    public function getByUserId($userId)
    {
        $query = $this->db->where("prop_user_id =",$userId)->get("proposals");
        return $query->result();
    }

    public function getByProjectId($pro_id)
    {
        // $query = $this->db->where("prop_pro_id =",$pro_id)->get("proposals");
        // return $query->result();
        $this->db->select('*');
        $this->db->from('proposals prop'); 
        $this->db->join('users user', 'user.user_id=prop.prop_user_id', 'left');
        $this->db->where('prop.prop_pro_id',$pro_id);
        $query = $this->db->get(); 
        return $query->result();
    } 

    public function create($data)
    {
       $this->db->insert("proposals", $data);
       $result = $this->db->insert_id();
       return $result;
    }

}

?>