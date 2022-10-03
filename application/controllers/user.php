<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public $user;
  
/**
    * Get All Data from this method.
    *
    * @return Response
   */
public function __construct() {
    parent::__construct(); 


    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('user_model');


    $this->user = new user_model;
 }


 /**
  * Display Data this method.
  *
  * @return Response
 */
 public function index()
 {
     $data['data'] = $this->user_model->get_user();

     $this->load->view('admin/header');       
     $this->load->view('admin/updateuser',$data);
     $this->load->view('admin/footer');
 }

 /**
  * Edit Data from this method.
  *
  * @return Response
 */
 public function edit($id)
 {
     $item = $this->user->find_item($id);


     $this->load->view('admin/header');
     $this->load->view('admin/edit',array('item'=>$item));
     $this->load->view('admin/footer');
 }


 /**
  * Update Data from this method.
  *
  * @return Response
 */
 public function update($id)
 {
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('contact_no', 'Contact No', 'required|regex_match[/^[0-9]{11}$/]');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('admin_id', 'admin_id', 'required');
  
      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('user/edit/'.$id));
      }else{ 
        $adminID = $this->input->post('admin_id');
        $userID = $this->input->post('user_id');
        $eventType = 'update_users';
        $timeStamp = date('m/d/Y h:i:s a', time());
        $this->user->setTimeStamp($timeStamp);
        $this->user->setUserID($userID);
        $this->user->setEventType($eventType);
        $this->user->setAdminID($adminID);
        $this->user->update_item($id);
        redirect('adminauth/profile');
      }
 }


 /**
  * Delete Data from this method.
  *
  * @return Response
 */
 public function delete($id)
 {
     $item = $this->user->delete_item($id);
     redirect(base_url('user'));
 }
}
