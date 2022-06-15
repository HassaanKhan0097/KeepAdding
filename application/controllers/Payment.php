<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    var $loggedUser;
    public function __construct() {
        parent::__construct();

        $this->load->library('paypal_lib');
        $this->load->model('Users_Model');
        $this->load->model('Transactions_Model');
    }

    public function index(){

        $data = $this->session->userdata('registerSession'); 

        //Set variables for paypal form
        $returnURL = base_url().'paypal/success'; //payment success url
        $failURL = base_url().'paypal/fail'; //payment fail url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
        //get particular product data
     
        // $custom = json_encode($data); //current user id
        $custom = $data['user_role'] . "," . $data['user_package'] . "," . $data['user_package_type'] . "," . $data['user_price'] . "," . $data['user_expire'] . "," . $data['user_created'] . "," . $data['user_username'] . "," . $data['user_email'] . "," . $data['user_fullname'] . "," . $data['user_pass'] . "," . $data['is_active'] ;
        $logo = base_url().'assets/images/logo.png';
         
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('fail_return', $failURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $data['user_package']);
        $this->paypal_lib->add_field('custom', $custom);
        $this->paypal_lib->add_field('item_number',  $data['user_role']);
        $this->paypal_lib->add_field('amount',  $data['user_price']);        
        $this->paypal_lib->image($logo);
         
        $this->paypal_lib->paypal_auto_form();
 
    }

    public function success(){

         //get the transaction data
        //  $paypalInfo = $this->input->get();
           
        //  $data['item_number'] = $paypalInfo['item_number']; 
        //  $data['txn_id'] = $paypalInfo["tx"];
        //  $data['payment_amt'] = $paypalInfo["amt"];
        //  $data['currency_code'] = $paypalInfo["cc"];
        //  $data['status'] = $paypalInfo["st"];
          
         //pass the transaction data to view
         $this->load->view('payment-success');
    }

    public function fail(){
        //if transaction cancelled
        $this->load->view('payment-fail');
    }

    public function ipn(){

        $paypalInfo = $this->input->post();
        // $user = $this->session->userdata('registerSession'); 
         //paypal return transaction details array       

         $custom = explode("," , $paypalInfo['custom']);


         $user['user_role'] = $custom[0];
        //  $user['user_package'] = $custom[1];
         $user['user_package_type'] = $custom[2];
        //  $user['user_price'] = $custom[3];
         $user['user_expire'] = $custom[4];
         $user['user_created'] = $custom[5];
         $user['user_username'] = $custom[6];
         $user['user_email'] = $custom[7];
         $user['user_fullname'] = $custom[8];
         $user['user_pass'] = $custom[9];
         $user['is_active'] = $custom[10]; 
 
        //  $data['t_user_id'] = $paypalInfo['custom'];
         $data['t_role']    = $paypalInfo["item_number"];
         $data['t_txn_id']    = $paypalInfo["txn_id"];
         $data['t_payment_gross'] = $paypalInfo["mc_gross"];
         $data['t_currency_code'] = $paypalInfo["mc_currency"];
         $data['t_payer_email'] = $paypalInfo["payer_email"];
         $data['t_payment_status']    = $paypalInfo["payment_status"];
         $data['t_created'] = date('Y-m-d');
  
        //  $paypalURL = $this->paypal_lib->paypal_url;        
        //  $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
          
         //check whether the payment is verified
        //  if(preg_match("/VERIFIED/i",$result)){
             //insert the transaction data into the database
             $checkTransaction = $this->Transactions_Model->checkTransaction($data['t_txn_id']); 
             if(!$checkTransaction){ 
                $this->Users_Model->signup($user);
                $lastId = $this->Users_Model->lastId();
                $data['t_user_id'] = $lastId->user_id;
                $this->Transactions_Model->storeTransaction($data);
    
             }else{
                $dummy['user_username'] = 'Afterrr';
                $dummy['user_email'] = $checkTransaction;
                $this->Users_Model->signup($dummy);
             }
             
             
          
        //  }
    }

    public function update(){
        $data = $this->session->userdata('pay_update'); 

        //Set variables for paypal form
        $returnURL = base_url().'paypal_update/success'; //payment success url
        $failURL = base_url().'paypal_update/fail'; //payment fail url
        $notifyURL = base_url().'paypal_update/ipn'; //ipn url
        //get particular product data
     
        // $custom = json_encode($data); //current user id
        $custom = $data['package_role'] . "," . $data['user_package_type'] . "," . $data['amount'] . "," . $data['user_id'] . "," . $data['user_expire'] ;
        $logo = base_url().'assets/images/logo.png';

        $item_name = 'Contractor';
        if($data['package_role'] == '3'){
            $item_name = 'Business';
        }
         
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('fail_return', $failURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $item_name);
        $this->paypal_lib->add_field('custom', $custom);
        $this->paypal_lib->add_field('item_number',  $data['package_role']);
        $this->paypal_lib->add_field('amount',  $data['amount']);        
        $this->paypal_lib->image($logo);
         
        $this->paypal_lib->paypal_auto_form();
    }

    public function success_update(){
        //pass the transaction data to view
        $this->load->view('payment-success_update');
   }

   public function fail_update(){
       //if transaction cancelled
       $this->load->view('payment-fail');
   }

   public function ipn_update(){

       $paypalInfo = $this->input->post();
     

        $custom = explode("," , $paypalInfo['custom']);

        $user['user_expire'] = $custom[4];
        $user['user_id'] = $custom[3];
   

       //  $data['t_user_id'] = $paypalInfo['custom'];
        $data['t_role']    = $paypalInfo["item_number"];
        $data['t_txn_id']    = $paypalInfo["txn_id"];
        $data['t_payment_gross'] = $paypalInfo["mc_gross"];
        $data['t_currency_code'] = $paypalInfo["mc_currency"];
        $data['t_payer_email'] = $paypalInfo["payer_email"];
        $data['t_payment_status']    = $paypalInfo["payment_status"];
        $data['t_created'] = date('Y-m-d');
 
       //  $paypalURL = $this->paypal_lib->paypal_url;        
       //  $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
         
        //check whether the payment is verified
       //  if(preg_match("/VERIFIED/i",$result)){
            //insert the transaction data into the database
            $checkTransaction = $this->Transactions_Model->checkTransaction($data['t_txn_id']); 
            if(!$checkTransaction){ 
                $this->Transactions_Model->storeTransaction($data);
               $this->Users_Model->update_expire_date($user);
            //    $lastId = $this->Users_Model->get();
            //    $data['t_user_id'] = $lastId->user_id;
               
   
            }
            
            
         
       //  }
   }



    public function test2(){
        echo "Reached";
        $temp = "2,Contractor,Monthly,39.99,2022-07-14,2022-06-14,u731,e731@731.com,f731,3713731,1";
        $custom = explode("," , $temp);


        $user['user_role'] = $custom[0];
        // $user['user_package'] = $custom[1];
        $user['user_package_type'] = $custom[2];
        // $user['user_price'] = $custom[3];
        $user['user_expire'] = $custom[4];
        $user['user_created'] = $custom[5];
        $user['user_username'] = $custom[6];
        $user['user_email'] = $custom[7];
        $user['user_fullname'] = $custom[8];
        $user['user_pass'] = $custom[9];
        $user['is_active'] = $custom[10]; 

       // echo "<br><pre>";
        // print_r($user);

       // $this->Users_Model->signup($user);


        // $checkTransaction = $this->Transactions_Model->checkTransaction('9XN22104M043s2743L'); 
        //      if(!$checkTransaction){ 
        //         echo "Proceed";
        //      }else{
        //         ec/ho "Dont";
        //      }

        $lastId = $this->Users_Model->lastId();

        echo "<pre>";
        // print_r($lastId);
        echo $lastId->user_id;

       
    }

}

?>