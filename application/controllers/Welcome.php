<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct(){
            parent::__construct();
            $this->load->helper('url');
            
}
	public function index()
	{
		$this->load->view('homepage');
      
        }
        public function add(){
            
             if( isset($_POST['add'])){
                $this->load->model('client_model');
                if($this->client_model->add_client()){
                    $this->session->set_flashdata('sucess','Product Added Sucessfuly');
                    die;
                    redirect('welcome/add', 'refresh');
                    
                } else{
                      $this->session->set_flashdata('error','An error occured');
                      die;
                       redirect('welcome/add', 'refresh');
                        
                    
                }
            
                
            }
            
            $this->load->view('add_Client');
        }
        

            
 public function viewclient(){
            $this->load->model('client_model');
            $this->load->database();
            $this->data['posts'] = $this->client_model->getclient(); 
             $this->load->view('client_List', $this->data);
           
        }  
        
      public function delete_client($id)
    {
               $this->load->database();
        $this->load->model('client_model'); 
        //delete employee record
        $this->db->where('Client_id', $id);
        $this->db->delete('client');
        redirect('welcome/viewclient');
    }
    public function update($id){
         $this->load->database();
      $this->load->model('client_model');
      if(isset($_POST['update'])){
            if($this->client_model->updateClient($id)){
                  $this->session->set_flashdata('sucess','Product Added Sucessfuly');
                    die;
                    redirect('welcome/update' . $id, 'refresh');
                    
                } else{
                      $this->session->set_flashdata('error','An error occured');
                      die;
                       redirect('welcome/update' . $id, 'refresh');
                        
                    
                
                
            }
        }
     $clients= $this->client_model->get_all_Client($id);
     
     $data['clients']= $clients;
       $this->load->view('update_client', $data);
                
    }
}


        
                      
        

                      
