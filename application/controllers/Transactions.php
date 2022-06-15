<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

    var $id;
    var $role;
    public function __construct() {
        parent::__construct();


         // $this->session->unset_userdata('loggedUser');
		$loggedUser = $this->session->userdata('loggedUser_KeepAdding');

		//var_dump($loggedUser);
        
		if(!$loggedUser) {
			$this->signin();
		} 
		else {
    		$this->role = $loggedUser['user_role'];
    
    		// if($role == '2') {
    		// 	redirect("contractorpages"); // Contractor
    		// }
    		// else if($role == '3') {
    		// 	redirect("home"); // Business
            // } 
            
            $this->id =  $loggedUser['user_id'];
		}
 
        $this->load->model('Transactions_Model');       
        

        
    }
	
	public function index()
	{      
        
        $data['user_role'] = $this->role;
        $data['transaction_list'] = $this->Transactions_Model->getByUserId($this->id); 
        
        // echo "<pre>";
        // print_r($data);
        $this->load->view('transaction-list',$data);
    }
    
   

   

    
}
