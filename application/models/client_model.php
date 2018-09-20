<?php
class client_model extends CI_Model{
    
public function add_client(){
 
    $data= array(
         'Client_id'=>$this->input->post('Client_id'),
           'first_name'=>$this->input->post('first_name'),
          'last_name'=>$this->input->post('last_name'),
          'address'=>$this->input->post('address'),
          'mobile'=>$this->input->post('mobile'),
          'email'=>$this->input->post('email'),
            );
        $this->db->insert('client',$data);
        $id = $this->db->insert_id();
        return $id;
}
public function getclient(){
  $this->db->select("Client_id,first_name,last_name,address,mobile,email"); 
  $this->db->from('client');
  $query = $this->db->get();
  return $query->result();
 }
public function get_all_Client($id){
    $this->db->select('*');
     $this->db->where('Client_id' , $id);
    $this->db->from('client');
    $query= $this->db->get();
    return $query->row();
    
    
}

public function updateClient($id){
    
    $data= array(
         'Client_id'=>$this->input->post('Client_id'),
           'first_name'=>$this->input->post('first_name'),
          'last_name'=>$this->input->post('last_name'),
          'address'=>$this->input->post('address'),
          'mobile'=>$this->input->post('mobile'),
          'email'=>$this->input->post('email'),
            );
    
            $this->db->where('Client_id', $id);
            $this->db->update('client' , $data);
            return $id ;
    
    
}

}




