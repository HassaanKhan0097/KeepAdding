<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposals extends CI_Controller {

    var $loggedUser;
    public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('loggedUser_KeepAdding')){
            redirect('KeepAdding');
        }
        
        $this->load->model('Projects_Model');
        $this->load->model('Proposals_Model');

        
        

        $this->loggedUser = $this->session->userdata('loggedUser_KeepAdding');
    }
	
	public function index()
	{        
        $this->load->view('contractor/proposal-list');    
	}

    public function send($pro_id)
	{   
        $data["pro"] = $this->Projects_Model->getById($pro_id);
        $this->load->view('contractor/proposal-send', $data);    
	}

    public function send_submit()
	{   
        $this->form_validation->set_rules('prop_desc','Description','required');
        $this->form_validation->set_rules('prop_bid_amount','Bid Amount','required');
        

        if ($this->form_validation->run() == TRUE) {

            $data['prop_desc'] = $this->input->post('prop_desc');
            $data['prop_bid_amount'] = $this->input->post('prop_bid_amount');

            

            $data['prop_pro_id'] = $this->input->post('prop_pro_id');
            $data['prop_user_id'] = $this->loggedUser['user_id'];
            $data['prop_created'] = date('F j, Y');

            $result = $this->Proposals_Model->create($data);

            if($result > 0){
                 redirect('contractorpages/projects');
            } else {
                //assign returned data from model to session
                $this->session->set_flashdata('message', $result);
                redirect("contractorpages/proposals/send/".$data['prop_pro_id']);
            }
            
        } 
        else {
            $this->send($this->input->post('prop_pro_id'));
        }
	}


    

    
}
