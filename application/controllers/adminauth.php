<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class adminauth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //load model
        $this->load->model('adminauth_model', 'adminauth');
        $this->load->library('form_validation');
    }

    // index method
    public function registration() {        
        $data = array();
        $data['metaDescription'] = 'Registration';
        $data['metaKeywords'] = 'Registration';
        $data['title'] = "Registration";
        $data['breadcrumbs'] = array('Login' => '#');
        
        $this->load->view('admin/addadmin', $data);
    }

// create admin user
    public function adminRegister() {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[adminusers.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('user_level', 'user_level', 'required|regex_match[/^[0-9]/]');
        $this->form_validation->set_rules('admin_id', 'admin_id', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->registration();
        } else {
            $firstName = $this->input->post('first_name');
            $lastName = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $userlevel= $this->input->post('user_level');
            $adminID = $this->input->post('admin_id');
            $timeStamp = date('m/d/Y h:i:s a', time());
            $status = 1;
            $verificationCode = 1;
            $uniqueId = uniqid();
            $eventType = 'create_admins';
            $userName = $this->adminauth->generateUniqueUserName('adminusers', trim($firstName . $lastName), 'user_name', NULL, NULL);
            $this->adminauth->setUserID(trim('AD' . $uniqueId), 'user_id', NULL, NULL);
            $this->adminauth->setUserName($userName);
            $this->adminauth->setFirstName(trim($firstName));
            $this->adminauth->setLastName(trim($lastName));
            $this->adminauth->setEmail($email); 
            $this->adminauth->setUserLevel( $userlevel);   
            $this->adminauth->setPassword($password);
            $this->adminauth->setVerificationCode($verificationCode);
            $this->adminauth->setTimeStamp($timeStamp);
            $this->adminauth->setStatus($status);
            $this->adminauth->setEventType($eventType);
            $this->adminauth->setAdminID($adminID);
            $chk = $this->adminauth->create();
            redirect('adminauth/profile');
        }
    }
    
    // login method
    public function login() {        
        $data = array();
        $data['metaDescription'] = 'Login';
        $data['metaKeywords'] = 'Login';
        $data['title'] = "Login";
        $data['breadcrumbs'] = array('Login' => '#');
        
        $this->load->view('admin/login', $data);
    }
    

    // action login method
    function doLogin() {        
        // Check form  validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->login();
        } else {
          $sessArray = array();
            //Field validation succeeded.  Validate against database
            $username = $this->input->post('user_name');
            $password = $this->input->post('password');
            
            $this->adminauth->setUserName($username);
            $this->adminauth->setPassword($password);
            //query the database
            $result = $this->adminauth->login();

            if (!empty($result) && count($result) > 0) {
                foreach ($result as $row) {
                    $authArray = array(
                        'user_id' => $row->user_id,
                        'first_name' => $row->first_name,
                        'user_level' => $row->user_level,
                        'user_name' => $row->user_name,
                        'email' => $row->email,
                        'is_authenticate_user' => TRUE,
                    );
                    $this->session->set_userdata('ci_session_key_generate', TRUE);
                    $this->session->set_userdata('ci_seesion_key', $authArray);

                    // remember me
                    if(!empty($this->input->post("remember"))) {
	                    setcookie ("loginId", $username, time()+ (10 * 365 * 24 * 60 * 60));  
	                    setcookie ("loginPass",	$password,	time()+ (10 * 365 * 24 * 60 * 60));
                    } else {
	                    setcookie ("loginId",""); 
	                    setcookie ("loginPass","");
                    }                    
                }
                redirect('adminauth/profile');
            } else {
                $this->login();
            }
        }
    }

    
    // profile page
    public function profile() {  
        if ($this->session->userdata('ci_seesion_key')['is_authenticate_user'] == FALSE) {
            redirect('adminauth/login');
        } else {   
           
            $data = array();
            $data['metaDescription'] = 'Profile';
            $data['metaKeywords'] = 'Profile';
            $data['title'] = "Profile ";
            $data['breadcrumbs'] = array('Profile' => '#');
            $this->load->view('admin/dashboard', $data);
              
         }
    }
    //logout method
    public function logout() {
        $this->session->unset_userdata('ci_seesion_key');
        $this->session->unset_userdata('ci_session_key_generate');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('adminauth/login');
    }   
}
