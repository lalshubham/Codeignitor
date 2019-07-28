<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        // URL loaded here
        $this->load->helper('url'); 
        // database Loaded Here
        $this->load->database(); 
     } 

     public function index() { 
        $query = $this->db->get("stud");
        $data['records'] = $query->result(); 
        // print_r($data['records']); 
        $this->load->helper('url'); 
        $this->load->view('students/Stud_view',$data); 
     } 

     public function add_stud_view(){
         $this->load->helper('form');
         $this->load->view('students/stud_add'); 
     }
     public function add_Student(){
        $this->load->model('Stud_Model');
        $data = array(
            'roll_no'=>$this->input->post('roll_no'),
            'name'=>$this->input->post('name'),
            'place'=>$this->input->post('place')
        );
            $this->Stud_Model->insert($data);
            $query = $this->db->get("stud"); 
            $data['records'] = $query->result(); 
            $this->load->view('students/Stud_view',$data);
     }
     public function update_student_view() { 
        $this->load->helper('form'); 
        $roll_no = $this->uri->segment('3'); 
        $query = $this->db->get_where("stud",array("roll_no"=>$roll_no));
        $data['records'] = $query->result(); 
        $data['old_roll_no'] = $roll_no; 
        $this->load->view('students/Stud_edit',$data); 
     } 

     public function update_student(){ 

        $this->load->model('Stud_Model');
           
        $data = array( 
           'roll_no' => $this->input->post('roll_no'), 
           'name' => $this->input->post('name') ,
           'place' => $this->input->post('place') 
        ); 
           
        $old_roll_no = $this->input->post('roll_no'); 
        $this->Stud_Model->update($data,$old_roll_no); 
           
        $query = $this->db->get("stud"); 
        $data['records'] = $query->result(); 
        $this->load->view('students/Stud_view',$data); 
     } 

     public function delete_student() { 
        $this->load->model('Stud_Model'); 
        $roll_no = $this->uri->segment('3'); 
        $this->Stud_Model->delete($roll_no); 
  
        $query = $this->db->get("stud"); 
        $data['records'] = $query->result(); 
        $this->load->view('students/Stud_view',$data); 
     } 

 
}
