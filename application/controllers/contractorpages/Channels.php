<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Channels extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('Channels_Model');
    }
	
	public function index()
	{        
        $this->load->view('contractor/channels-create');
	}

    public function create_channel_submit()
	{        
        $this->form_validation->set_rules('ch_title','Title','required');
        $this->form_validation->set_rules('ch_desc','Description', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data['ch_title'] = $this->input->post('ch_title');
            $data['ch_desc'] = $this->input->post('ch_desc');

            //$path = $this->config->item('upload_dir').'forum/channels/';
            $path = './uploads/forum/channels/';

            // Define new $_FILES array - $_FILES['file']
            $_FILES['file']['name'] = $_FILES['ch_file']['name'];
            $_FILES['file']['type'] = $_FILES['ch_file']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['ch_file']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['ch_file']['error'];
            $_FILES['file']['size'] = $_FILES['ch_file']['size'];


            $config['upload_path']          = $path;
            $config['allowed_types']        = '*';
            $config['max_size']             = 10024; // 10mb you can set the value you want
            $config['max_width']            = 6000; // 6000px you can set the value you want
            $config['max_height']           = 6000; // 6000px
            // $new_name = $data['cl_name'].$i;
            $new_name =  $data['ch_title'];
            $file_ext = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);

            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    echo "<pre>";
                    print_r($error);

                    // $this->session->set_flashdata('message_error', 'Image Upload Failed!');
                    // $this->index();
            }
            else
            {
                    $uploadedData = array('upload_data' => $this->upload->data());

                    // Initialize array and save every entry to attachment db
                    $filename = $uploadedData['upload_data']['file_name'];

                    // echo "<pre>";
                    // print_r($filenames);

                    //Save entry to db now
                    $data["ch_img"] = $new_name.".".$file_ext;
                    $result = $this->Channels_Model->create($data);

                    if($result > 0){
                        redirect('contractorpages');
                    } else {
                        //assign returned data from model to session
                        $this->session->set_flashdata('message_error', $result);
                        $this->index();
                    }

            }
            
        } 
        else {
            $this->index();
        }
	}

    
}
