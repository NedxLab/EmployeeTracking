<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load model
        $this->load->model('Auth_model', 'auth');
        $this->load->library('form_validation');
    }

    // index method
    public function registration() {        
        $data = array();
        $data['metaDescription'] = 'Registration';
        $data['metaKeywords'] = 'Registration';
        $data['title'] = "Registration";
        $data['breadcrumbs'] = array('Login' => '#');
        
        $this->load->view('admin/adduser', $data);
    }

    // action create user method
    public function actionRegister() {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('contact_no', 'Contact No', 'required|regex_match[/^[0-9]{11}$/]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth(DD-MM-YYYY)', 'required');
        $this->form_validation->set_rules('admin_id', 'admin_id', 'required');
 
        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $firstName = $this->input->post('first_name');
            $lastName = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $contactNo = $this->input->post('contact_no');
            $dob = $this->input->post('dob');
            $address = $this->input->post('address');
            $adminID = $this->input->post('admin_id');
            $timeStamp = date('m/d/Y h:i:s a', time());
            $status = 1;
            $verificationCode = 1;
            $uniqueId = uniqid();
            $eventType = 'create_users';
            $userName = $this->auth->generateUniqueUserName('users', trim($firstName . $lastName), 'user_name', NULL, NULL);
            $this->auth->setUserID(trim($uniqueId . $userName), 'user_id', NULL, NULL);
            $this->auth->setUserName($userName);
            $this->auth->setFirstName(trim($firstName));
            $this->auth->setLastName(trim($lastName));
            $this->auth->setEmail($email);  
            $this->auth->setPassword($password);
            $this->auth->setContactNo($contactNo);
            $this->auth->setAddress($address);
            $this->auth->setAdminID($adminID);
            $this->auth->setDOB($dob);
            $this->auth->setVerificationCode($verificationCode);
            $this->auth->setTimeStamp($timeStamp);
            $this->auth->setStatus($status);
            $this->auth->setEventType($eventType);
            $chk = $this->auth->create();
            redirect('adminauth/profile');
        }
    }
    
    //logout method
    public function logout() {
        $this->session->unset_userdata('ci_seesion_key');
        $this->session->unset_userdata('ci_session_key_generate');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('auth/login');
    }   

}

