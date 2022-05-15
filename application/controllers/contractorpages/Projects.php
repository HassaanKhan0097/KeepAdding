<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

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
        $data['projects'] = $this->Projects_Model->get(); 
        $proposals = $this->Proposals_Model->getByUserId($this->loggedUser['user_id']); 

        
        foreach ($data['projects'] as $project) {

            //proposal_sent logic
            $isSent = array_search($project->pro_id, array_column($proposals, 'prop_pro_id'));
            $isSent !== false ? $project->proposal_sent = 1 : $project->proposal_sent = 0; 

            //count bids
            $project->total_bids = count($this->Proposals_Model->getByProjectId($project->pro_id));
        }


        $this->load->view('contractor/project-list', $data);    
	}


    public function search()
	{        
        $keyword = $this->input->get('keyword', TRUE);
        $business = $this->input->get('business', TRUE);

        $data['projects'] = $this->Projects_Model->search($keyword, $business); 
        $proposals = $this->Proposals_Model->getByUserId($this->loggedUser['user_id']); 

        
        foreach ($data['projects'] as $project) {

            //proposal_sent logic
            $isSent = array_search($project->pro_id, array_column($proposals, 'prop_pro_id'));
            $isSent !== false ? $project->proposal_sent = 1 : $project->proposal_sent = 0; 

            //count bids
            $project->total_bids = count($this->Proposals_Model->getByProjectId($project->pro_id));
        }


        $this->load->view('contractor/project-list', $data);    
	}

    
}
