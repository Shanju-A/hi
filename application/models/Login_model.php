<?php  
  
class Login_model extends CI_Model {  
  
    public function log_in_correctly() { 
        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
       

        $query = $this->db->get('signup');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;
        } else {  
            return false;
        }  
  
    }  

    public function get_data() {
        $this->db->select('class');
        $name= $this->db->get('class');  
        
        return $name;
        

    }
   
    public function insert_data($data){

        $response=$this->db->insert('signup',$data);
        return $response;

    }

    public function manage(){
        $this->db->select('username,rn,class');
        $query=$this->db->get("signup");
        return $query->result();

    }

    public function manage_res($data){
        $this->db->where('rn', $this->input->post('rno'));
        $query=$this->db->update('signup',$data);
        return $query;
        
    }

    public function insert_class($data){
        
        $query=$this->db->insert("class",$data);
        return $query;

    }

    public function manage_class(){
        $this->db->select("class,class_id");
        $query=$this->db->get("class");
        return $query->result();
    }

    public function insert_result($data){
        
        $query=$this->db->insert("signup",$data);
        return $query;

    }

    
    public function student_details() {
       
        
        $this->db->select('username,class,rn,m1,m2,m3,m4,m5');
        $this->db->where('class', $this->input->post("class"));
        $this->db->where('rn', $this->input->post("rn"));
        $query = $this->db->get('signup');

        if($query->num_rows() ==1){
        
        return $query->result();
        }
        else{
            return false;
        }
  
        

    }
  
      
}  
?>  