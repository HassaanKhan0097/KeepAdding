<?php 

class Transactions_Model extends CI_Model {

    // !!--------------- General Functions --------------!!
    public function get()
    {
            $query = $this->db->get('transactions');
            return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where("t_id =",$id)->get("transactions");
        return $query->row();
    }


    public function storeTransaction($data){
        $this->db->insert("transactions", $data);
        $result = $this->db->insert_id();
        return $result;
    }

    public function checkTransaction($txn_id){
        $this->db->select('*'); 
        $this->db->from('transactions');
        $this->db->where('t_txn_id', $txn_id);
        $result = $this->db->get(); 
        return ($result->num_rows() > 0)?$result->row_array():false; 
    }

}

?>