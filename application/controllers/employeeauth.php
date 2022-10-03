<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class employeeauth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load model
        $this->load->model('employeeauth_model', 'employeeauth');
        $this->load->library('form_validation');
    }

    
    // employee registration index
    public function registration() {        
        $data = array();
        $data['metaDescription'] = 'Registration';
        $data['metaKeywords'] = 'Registration';
        $data['title'] = "Registration";
        $data['breadcrumbs'] = array('Login' => '#');
        
        $this->load->view('admin/addemployee', $data);
    }
    // create employee user
    public function employeeRegister() {
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('surname', ' Surname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[employee.email]');
        $this->form_validation->set_rules('gradelevel', 'gradelevel', 'required|regex_match[/^[0-9]/]');
        $this->form_validation->set_rules('admin_id', 'admin_id', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $firstName = $this->input->post('firstname');
            $surName = $this->input->post('surname');
            $email = $this->input->post('email');
            $adminID = $this->input->post('admin_id');
            $otherName = $this->input->post('othername');
            $gradelevel= $this->input->post('gradelevel');
            $timeStamp = date('m/d/Y h:i:s a', time());
            $status = 1;
            $appointment = 'yes';
            $Confirmation = 1;
            $eventType = 'create_employee';
            $uniqueId = uniqid();
            $this->employeeauth->setEmployeeID(trim('EM' . $uniqueId), 'employee_id', NULL, NULL);
            $this->employeeauth->setAppointment($appointment);
            $this->employeeauth->setFirstName(trim($firstName));
            $this->employeeauth->setSurName(trim($surName));
            $this->employeeauth->setOtherName(trim($otherName));
            $this->employeeauth->setEmail($email); 
            $this->employeeauth->setGradeLevel( $gradelevel);   
            $this->employeeauth->setConfirmation($Confirmation);
            $this->employeeauth->setTimeStamp($timeStamp);
            $this->employeeauth->setStatus($status);
            $this->employeeauth->setEventType($eventType);
            $this->employeeauth->setAdminID($adminID);
            $chk = $this->employeeauth->create();
            redirect('adminauth/profile');
        }
    }
}