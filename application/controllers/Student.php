<?php

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index() {

        $students = $this->Student_model->getAllStudents();

        $data = array(
            'students' => $students,
            'pageTitle' => 'Student Information System',
            ''
        );

        $this->load->view('student/student_dashboard', $data);
    }

    public function hello() {
        echo "this in hello page";
    }

    public function addStudent() {
        //This function adds student

        if ($this->input->post('name')) {
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $class = $this->input->post('class');
            $phone = $this->input->post('phone');
            $marks = $this->input->post('marks');

            $student = array(
                'name' => $name,
                'address' => $address,
                'class' => $class,
                'phone' => $phone,
                'marks' => $marks
            );

            $this->Student_model->addStudent($student);

            redirect('Student');
        } else {

            $data = array(
                'back_url' => site_url('Student')
            );
            $this->load->view('student/add_new',$data);
        }
    }

    public function editStudent($id) {

        if ($this->input->post('id')) {
            
            $id = $this->input->post('id');
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $class = $this->input->post('class');
            $phone = $this->input->post('phone');
            $marks = $this->input->post('marks');

            $student = array(
                'name' => $name,
                'address' => $address,
                'class' => $class,
                'phone' => $phone,
                'marks' => $marks
            );

            $this->Student_model->updateStudent($id, $student);

            redirect('Student');
        } else {
            $student = $this->Student_model->getStudent($id);
            $data = array(
                'student' => $student,
                'back_url' => site_url('Student')
            );
            $this->load->view('student/edit', $data);
        }
    }
    
    public function test(){
        $student = array(
            'name'=> 'ABC',
            'address'=> 'PQR',
            'class'=> '12',
            'phone'=> '4554',
            'marks'=>'787'
        );
        $this->Student_model->updateStudent(1, $student);
    }
    
    public function deleteStudent($id){
        $this->Student_model->deleteStudent($id);
        redirect('Student');
    }

}
