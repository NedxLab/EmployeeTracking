<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class programfee extends CI_Controller {
    public $programfee;
  
/**
    * Get All Data from this method.
    *
    * @return Response
   */
public function __construct() {
    parent::__construct(); 


    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('programfeeModel');


    $this->programfee = new programfeeModel;
 }


 /**
  * Display Data this method.
  *
  * @return Response
 */
 public function index()
 {
     $data['data'] = $this->programfee->get_programfee();


     $this->load->view('programfee/header');       
     $this->load->view('programfee/list',$data);
     $this->load->view('programfee/footer');
 }


 /**
  * Create from display on this method.
  *
  * @return Response
 */
 public function create()
 {
    $data['data'] = $this->programfee->get_employee();


    $this->load->view('programfee/header');       
    $this->load->view('programfee/create',$data);
    $this->load->view('programfee/footer');  
 }


 /**
  * Store Data from this method.
  *
  * @return Response
 */
 public function store()
 {
      $this->form_validation->set_rules('voucher_no', 'vOucher Number', 'required');
      $this->form_validation->set_rules('user_id', 'no user id', 'required');
      $this->form_validation->set_rules('serial', 'serial Number', 'required');
      $this->form_validation->set_rules('voucher_date', 'voucher date', 'required');
      $this->form_validation->set_rules('voucher_amount', 'voucher_amount', 'required');
      $this->form_validation->set_rules('voucher_currency', 'voucher_currency', 'required');
      $this->form_validation->set_rules('program_start_date', 'program start date', 'required');
      $this->form_validation->set_rules('program_end_date', 'program end date', 'required');
      $this->form_validation->set_rules('remarks', 'remarks', 'required');
      $this->form_validation->set_rules('employee_id', 'employee_id', 'required');


      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('programfee/create'));
      }else{
        $timeStamp = date('m/d/Y h:i:s a', time());
        $this->programfee->setTimeStamp($timeStamp);
         $this->programfee->insert_item();
         redirect(base_url('programfee'));
      }
  }


 /**
  * Edit Data from this method.
  *
  * @return Response
 */
 public function edit($id)
 {
     $item = $this->programfee->find_item($id);


     $this->load->view('programfee/header');
     $this->load->view('programfee/edit',array('item'=>$item));
     $this->load->view('programfee/footer');
 }


 /**
  * Update Data from this method.
  *
  * @return Response
 */
 public function update($id)
 {
      $this->form_validation->set_rules('voucher_no', 'vOucher Number', 'required');
      $this->form_validation->set_rules('user_id', 'no user id', 'required');
      $this->form_validation->set_rules('serial', 'serial Number', 'required');
      $this->form_validation->set_rules('voucher_date', 'voucher date', 'required');
      $this->form_validation->set_rules('voucher_amount', 'voucher_amount', 'required');
      $this->form_validation->set_rules('voucher_currency', 'voucher_currency', 'required');
      $this->form_validation->set_rules('program_start_date', 'program start date', 'required');
      $this->form_validation->set_rules('program_end_date', 'program end date', 'required');
      $this->form_validation->set_rules('remarks', 'remarks', 'required');

      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('programfee/edit/'.$id));
      }else{ 
        $this->programfee->update_item($id);
        redirect(base_url('programfee'));
      }
 }


 /**
  * Delete Data from this method.
  *
  * @return Response
 */
 public function delete($id)
 {
     $item = $this->programfee->delete_item($id);
     redirect(base_url('programfee'));
 }
}
