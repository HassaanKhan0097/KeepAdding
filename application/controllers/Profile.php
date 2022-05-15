<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        //$data['projects'] = $this->Projects_Model->get(); 
        $this->load->view('profile');
	}

    public function get($id)
	{        
        $data['project'] = $this->Projects_Model->getById($id); 
        $data['proposals'] = $this->Proposals_Model->getByProjectId($id);
        $data['proposals_count'] = count($data['proposals']);

        $this->load->view('project-view', $data);
	}

    public function create()
	{       
        $this->load->view('project-create');
	}

    public function create_submit()
	{       
        $this->form_validation->set_rules('pro_title','Post Title','required');
        $this->form_validation->set_rules('pro_business_owner','Post Body', 'required');
        $this->form_validation->set_rules('pro_details', 'Post Channel', 'required');
        $this->form_validation->set_rules('pro_point_of_contact', 'Post Channel', 'required');
        $this->form_validation->set_rules('pro_nature', 'Post Channel', 'required');
        $this->form_validation->set_rules('pro_proposal_type', 'Post Channel', 'required');
        $this->form_validation->set_rules('pro_budget', 'Post Channel', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data['pro_title'] = $this->input->post('pro_title');
            $data['pro_business_owner'] = $this->input->post('pro_business_owner');
            $data['pro_details'] = $this->input->post('pro_details');
            $data['pro_point_of_contact'] = $this->input->post('pro_point_of_contact');
            $data['pro_nature'] = $this->input->post('pro_nature');
            $data['pro_proposal_type'] = $this->input->post('pro_proposal_type');
            $data['pro_budget'] = $this->input->post('pro_budget');

            $data['pro_user_id'] = $this->loggedUser['user_id'];
            $data['pro_created'] = date('F j, Y');

            $result = $this->Projects_Model->create($data);

            if($result > 0){
                redirect('projects');
            } else {
                //assign returned data from model to session
                $this->session->set_flashdata('message', $result);
                redirect('posts/create_post');
            }
            
        } 
        else {
            $this->create();
        }
	}

    
}
