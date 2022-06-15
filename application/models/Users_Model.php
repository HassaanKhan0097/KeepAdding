<?php 

class Users_Model extends CI_Model {

    // !!--------------- General Functions --------------!!
    public function get()
    {
            $query = $this->db->get('users');
            return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->where("user_id =",$id)->get("users");
        return $query->row();
    }









    // !!--------------- Util Functions --------------!!
    public function login($data)
    {
        $multiClause = array('user_username' => $data['user_username'], 'is_active' => 1 );
        $query = $this->db->where($multiClause)->get("users");
        if($query->num_rows() > 0) {

            // "DATE_FORMAT(user_expire,'%Y-%m-%d') >= NOW()"

            // var_dump($query->row());
              // if( password_verify($data['user_pass'], $user['user_pass']) ) {
            $user = $query->result_array()[0];

            $date = new DateTime($user['user_expire']);
            $now = new DateTime();

             if( $data['user_pass'] == $user['user_pass'] ) {

                if($date < $now) {
                    return "Package is expired";
    
                }else{
                    return $user;
                }
                
                

            } else {

                return "Wrong Password";

            }

            

        } else {

            return "No User Found";

        }
    }


    public function signup($data)
    {
       $this->db->insert("users", $data);
       $result = $this->db->insert_id();

        if($result > 0) {

            $result2 = $this->login($data);
            return $result2;

        } else {

            return "Registration Failed!";

        }
    }

    public function lastId(){
        $result = $this->db->select('user_id')->from('users')->order_by('user_id', 'desc')->limit(1)->get();
        return $result->row();
    }

    public function update_expire_date($data){
        $id = $data['user_id'];
        
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
        $result = $this->db->affected_rows();
        return $result;
    }

    

}

?>