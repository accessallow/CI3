<?php

class Student_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getAllStudents(){
        $query = $this->db->get('student_info');
        return $query->result();
    }
    
    public function addStudent($student){
        $this->db->insert('student_info',$student);
    }
    
    public function getStudent($id){
        $query = $this->db->get_where('student_info',array(
            'id'=> $id
        ));
        $resultsetArray = $query->result();
        return $resultsetArray[0];
    }
    
    public function updateStudent($id,$student){
        $this->db->update('student_info',$student,array(
            'id'=>$id
        ));
    }
    
    public function deleteStudent($id){
        $this->db->delete('student_info',array(
            'id'=>$id
        ));
    }
}
