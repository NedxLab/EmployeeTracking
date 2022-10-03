<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estacode extends CI_Controller {
    public $estacode;
  
/**
    * Get All Data from this method.
    *
    * @return Response
   */
public function __construct() {
    parent::__construct(); 


    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('estacodeModel');


    $this->estacode = new estacodeModel;
 }


 /**
  * Display Data this method.
  *
  * @return Response
 */
 public function index()
 {
     $data['data'] = $this->estacodeModel->get_estacode();


     $this->load->view('estacode/header');       
     $this->load->view('estacode/list',$data);
     $this->load->view('estacode/footer');
 }




 /**
  * Create from display on this method.
  *
  * @return Response
 */
 public function create()
 {
    $data['data'] = $this->estacode->get_employee();


    $this->load->view('estacode/header');       
    $this->load->view('estacode/create',$data);
    $this->load->view('estacode/footer');   
 }


 /**
  * Store Data from this method.
  *
  * @return Response
 */
 public function store()
 {
      $this->form_validation->set_rules('user_id', 'no user id', 'required');
      $this->form_validation->set_rules('serial', 'serial', 'required');
      $this->form_validation->set_rules('voucher_no', 'vOucher Number', 'required');
      $this->form_validation->set_rules('voucher_date', 'voucher date', 'required');
      $this->form_validation->set_rules('voucher_amount', 'voucher_amount', 'required');
      $this->form_validation->set_rules('voucher_currency', 'voucher_currency', 'required');
      $this->form_validation->set_rules('program_title', 'program_title', 'required');
      $this->form_validation->set_rules('program_type', 'program_type', 'required');
      $this->form_validation->set_rules('program_country', 'program_country', 'required');
      $this->form_validation->set_rules('long_haul', 'long_haul', 'required');
      $this->form_validation->set_rules('trip_start_date', 'trip start date', 'required');
      $this->form_validation->set_rules('trip_end_date', 'trip end date', 'required');
      $this->form_validation->set_rules('remarks', 'remarks', 'required');
      $this->form_validation->set_rules('employee_id', 'employee_id', 'required');


      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('estacode/create'));
      }else{
        $timeStamp = date('m/d/Y h:i:s a', time());
        $this->estacode->setTimeStamp($timeStamp);
         $this->estacode->insert_item();
         redirect(base_url('estacode'));
      }
  }


 /**
  * Edit Data from this method.
  *
  * @return Response
 */
 public function edit($id)
 {
     $item = $this->estacode->find_item($id);


     $this->load->view('estacode/header');
     $this->load->view('estacode/edit',array('item'=>$item));
     $this->load->view('estacode/footer');
 }


 /**
  * Update Data from this method.
  *
  * @return Response
 */
 public function update($id)
 {
    $this->form_validation->set_rules('user_id', 'no user id', 'required');
    $this->form_validation->set_rules('serial', 'serial', 'required');
    $this->form_validation->set_rules('voucher_no', 'vOucher Number', 'required');
    $this->form_validation->set_rules('voucher_date', 'voucher date', 'required');
    $this->form_validation->set_rules('voucher_amount', 'voucher_amount', 'required');
    $this->form_validation->set_rules('voucher_currency', 'voucher_currency', 'required');
    $this->form_validation->set_rules('program_title', 'program_title', 'required');
    $this->form_validation->set_rules('program_type', 'program_type', 'required');
    $this->form_validation->set_rules('program_country', 'program_country', 'required');
    $this->form_validation->set_rules('long_haul', 'long_haul', 'required');
    $this->form_validation->set_rules('trip_start_date', 'trip start date', 'required');
    $this->form_validation->set_rules('trip_end_date', 'trip end date', 'required');
    $this->form_validation->set_rules('remarks', 'remarks', 'required');
    
      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('estacode/edit/'.$id));
      }else{ 
        $this->estacode->update_item($id);
        redirect(base_url('estacode'));
      }
 }


 /**
  * Delete Data from this method.
  *
  * @return Response
 */
 public function delete($id)
 {
     $item = $this->estacode->delete_item($id);
     redirect(base_url('estacode'));
 }
}
