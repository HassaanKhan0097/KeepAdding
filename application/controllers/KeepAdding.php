<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeepAdding extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Users_Model');
        $this->load->model('Subscription_Model');

    }
	
	public function index()
	{
        // $this->session->unset_userdata('loggedUser');
		$loggedUser = $this->session->userdata('loggedUser_KeepAdding');

		//var_dump($loggedUser);
        
		if(!$loggedUser) {
			$this->signin();
		} 
		else {
    		$role = $loggedUser['user_role'];
    
    		if($role == '2') {
    			redirect("contractorpages"); // Contractor
    		}
    		else if($role == '3') {
    			redirect("home"); // Business
    		} 
		}


	}


	public function signin()
	{
		$this->load->view('signin');
	}

    public function signup()
	{
        $data['subscription_list'] = $this->Subscription_Model->get();   
		$this->load->view('signup',$data);
	}


	public function signin_submit()
    {
        $this->form_validation->set_rules('user_username','Username','required');
        $this->form_validation->set_rules('user_pass','Password', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data['user_username'] = $this->input->post('user_username');
            $data['user_pass'] = $this->input->post('user_pass');

            $result = $this->Users_Model->login($data);

			//var_dump($result);

            if(!is_array($result)){
                $this->session->set_flashdata('message_error', $result);
                redirect('signin');
            } else {
                //assign returned data from model to session
                $this->session->set_userdata('loggedUser_KeepAdding', $result);
                $this->index();
            }
            
        } 
        else {
            $this->index();
        }

    }


    public function signup_submit()
    {
        $this->form_validation->set_rules('user_username','Username','required');
        $this->form_validation->set_rules('user_email','Email', 'required');
        $this->form_validation->set_rules('user_fullname','Full Name', 'required');
        $this->form_validation->set_rules('user_pass','Password', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data['user_role'] = $this->input->post('user_role');
            $data['user_package'] = $this->input->post('user_package');
            $data['user_package_type'] = $this->input->post('user_package_type');
            $data['user_price'] = $this->input->post('user_price');

            $expire = "2030-01-01";
            

            if($data['user_role'] != 1 &&  $data['user_package_type'] == "Monthly" ){
                $expire =  Date('Y-m-d', strtotime('+30 days'));
            }else if($data['user_role'] != 1 && $data['user_package_type'] == "Annually"){
                $expire =  Date('Y-m-d', strtotime('+365 days'));
            }
            
            $data['user_expire'] = $expire;
            $data['user_created'] = date("Y-m-d");

            $data['user_username'] = $this->input->post('user_username');
            $data['user_email'] = $this->input->post('user_email');
            $data['user_fullname'] = $this->input->post('user_fullname');
            $data['user_pass'] = $this->input->post('user_pass');
            $data['is_active'] = 1;
            // $data['user_role'] = '3';


            
            if($data['user_role'] == 1){
                $result = $this->Users_Model->signup($data);
            }else{

                $this->session->set_userdata('registerSession', $data);


                // $see = $this->session->userdata('registerSession'); 

                // echo "<pre>";
                // print_r($see);
                redirect('paypal');
            }

			//var_dump($result);

            // if(!is_array($result)){
            //     $this->session->set_flashdata('message_error', $result);
            //     redirect('signup');
            // } else {
            //     //assign returned data from model to session
            //     $this->session->set_userdata('loggedUser_KeepAdding', $result);
            //     $this->index();
            // }
            
        } 
        else {
            $this->signup();
        }

    }

	public function signout(){
        $this->session->unset_userdata('loggedUser_KeepAdding');
        redirect('');
    }
}
