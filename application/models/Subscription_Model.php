<?php 

class Subscription_Model extends CI_Model {

    public function get()
    {
        $this->db->select('*');
        $this->db->from('subscriptions');  
        $query = $this->db->get();
        return $query->result();
    }

    public function update($data)
    {
        $id = $data['s_id'];
        $this->db->where('s_id', $id);
        $this->db->update('subscriptions', $data);
        $result = $this->db->affected_rows();
        return $result;
    }

    

}

?>