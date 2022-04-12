<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  

    function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Login_model');
        $this->load->library('session');
		
		
	}
  
    public function index()  
    {  
        $this->login();
        


    }  
  
    public function login()  
    {  
        $data['h']=$this->Login_model->get_data();
        $this->load->view('login',$data);  
    }  

    public function dashboard()
    {  
        $value=$this->Login_model->log_in_correctly();
        
        if($value=='true'){

            $this->load->view('dashboard');
        }else{
           
            $this->load->view('login');
        }
    }  

    public function student()  
    {  
        $data['i']=$this->Login_model->student_details();
        if($data['i'] == false){
            redirect('Main/login');
        
        }else{
        $this->load->view('student',$data);
        }
    }  

    public function add_stud()  
    {  
        $data['h']=$this->Login_model->get_data();
        $this->load->view("add_students",$data);
     
       
    }  

    public function insert()  
    {  
        $data['username']=$this->input->post('student_name');
        $data['class']=$this->input->post('class');
        $data['rn']=$this->input->post('roll_no');

        $res=$this->Login_model->insert_data($data);

        if($res==true){
            echo '<script>alert("Record Inserted Successfuly")</script>';
            echo "record inserted successfuly";
            
            
        }else{
            echo '<script>alert("Insert error")</script>';
        }
     
       
    }  

    public function add_class(){

        $this ->load->view("add_classes");
    }

    
    public function manage()  
    {  
        $data['data']=$this->Login_model->manage();
       $this->load->view('manage_students',$data);
       
       
    }  

    public function addclass(){

      
        $data['class']=$this->input->post('class_name');
        $data['class_id']=$this->input->post('class_id');

        
        $res=$this->Login_model->insert_class($data);

        if($res==true){
            echo '<script>alert("Record Inserted Successfuly")</script>';
            echo "record inserted successfuly";
            
            
        }else{
            echo '<script>alert("Insert error")</script>';
        }
        

    }

    public function add_result(){
        $data['h']=$this->Login_model->get_data();
        $this->load->view("add_results",$data);
    }

    public function manage_class(){

        $data["l"]=$this->Login_model->manage_class();
        $this->load->view("manage_classes",$data);
        
    }

    public function manage_results(){

        $data["h"]=$this->Login_model->get_data();
        $this->load->view("manage_results",$data);
        
        
    }
    
    public function manage_res(){
        $data['class']=$this->input->post('class');
        $data['m1']=$this->input->post('p1');
        $data['m2']=$this->input->post('p2');
        $data['m3']=$this->input->post('p3');
        $data['m4']=$this->input->post('p4');
        $data['m5']=$this->input->post('p5');
        $res=$this->Login_model->manage_res($data);

        if($res==true){
            echo '<script>alert("Record Inserted Successfuly")</script>';
            echo "record inserted successfuly";
            
            
        }else{
            echo '<script>alert("Insert error")</script>';
        }

       

    }

    public function add_res(){
        $data['class']=$this->input->post('class');
        $data['rn']=$this->input->post('rno');
        $data['m1']=$this->input->post('p1');
        $data['m2']=$this->input->post('p2');
        $data['m3']=$this->input->post('p3');
        $data['m4']=$this->input->post('p4');
        $data['m5']=$this->input->post('p5');
        $res=$this->Login_model->insert_result($data);

        if($res==true){
            echo '<script>alert("Record Inserted Successfuly")</script>';
            echo "record inserted successfuly";
            
            
        }else{
            echo '<script>alert("Insert error")</script>';
        }
    }

    public function logout()
    {  
        
        redirect("Main/login");
        echo '<script language="javascript">';
        echo 'alert("Logout successful")';
        echo '</script>';
        
    }  
  
}  
?> 