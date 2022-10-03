<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ticketing extends CI_Controller {
    public $ticketing;
  
/**
    * Get All Data from this method.
    *
    * @return Response
   */
public function __construct() {
    parent::__construct(); 


    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('ticketingModel');


    $this->ticketing = new ticketingModel;
 }


 /**
  * Display Data this method.
  *
  * @return Response
 */
 public function index()
 {
     $data['data'] = $this->ticketing->get_ticketing();


     $this->load->view('ticketing/header');       
     $this->load->view('ticketing/list',$data);
     $this->load->view('ticketing/footer');
 }


 /**
  * Create from display on this method.
  *
  * @return Response
 */
 public function create()
 {
    $data['data'] = $this->ticketing->get_employee();


    $this->load->view('ticketing/header');       
    $this->load->view('ticketing/create',$data);
    $this->load->view('ticketing/footer');    
 }


 /**
  * Store Data from this method.
  *
  * @return Response
 */
 public function store()
 {
      $this->form_validation->set_rules('serial', 'Serial Number', 'required');
      $this->form_validation->set_rules('user_id', 'no user id', 'required');
      $this->form_validation->set_rules('voucher_no', 'vOucher Number', 'required');
      $this->form_validation->set_rules('voucher_date', 'voucher date', 'required');
      $this->form_validation->set_rules('voucher_amount', 'voucher_amount', 'required');
      $this->form_validation->set_rules('voucher_currency', 'voucher_currency', 'required');
      $this->form_validation->set_rules('airline', 'airline', 'required');
      $this->form_validation->set_rules('agent', 'agent', 'required');
      $this->form_validation->set_rules('booking_ref', 'booking_ref', 'required');
      $this->form_validation->set_rules('ticket_no', 'ticket_no', 'required');
      $this->form_validation->set_rules('destination', 'destination', 'required');
      $this->form_validation->set_rules('depart_date', 'trip start date', 'required');
      $this->form_validation->set_rules('return_date', 'return_date', 'required');
      $this->form_validation->set_rules('remarks', 'remarks', 'required');
      $this->form_validation->set_rules('employee_id', 'employee_id', 'required');


      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('ticketing/create'));
      }else{
        $timeStamp = date('m/d/Y h:i:s a', time());
        $this->ticketing->setTimeStamp($timeStamp);
         $this->ticketing->insert_item();
         redirect(base_url('ticketing'));
      }
  }


 /**
  * Edit Data from this method.
  *
  * @return Response
 */
 public function edit($id)
 {
     $item = $this->ticketing->find_item($id);


     $this->load->view('ticketing/header');
     $this->load->view('ticketing/edit',array('item'=>$item));
     $this->load->view('ticketing/footer');
 }


 /**
  * Update Data from this method.
  *
  * @return Response
 */
 public function update($id)
 {
       $this->form_validation->set_rules('serial', 'Serial Number', 'required');
       $this->form_validation->set_rules('user_id', 'no user id', 'required');
      $this->form_validation->set_rules('voucher_no', 'vOucher Number', 'required');
      $this->form_validation->set_rules('voucher_date', 'voucher date', 'required');
      $this->form_validation->set_rules('voucher_amount', 'voucher_amount', 'required');
      $this->form_validation->set_rules('voucher_currency', 'voucher_currency', 'required');
      $this->form_validation->set_rules('airline', 'airline', 'required');
      $this->form_validation->set_rules('agent', 'agent', 'required');
      $this->form_validation->set_rules('booking_ref', 'booking_ref', 'required');
      $this->form_validation->set_rules('ticket_no', 'ticket_no', 'required');
      $this->form_validation->set_rules('destination', 'destination', 'required');
      $this->form_validation->set_rules('depart_date', 'trip start date', 'required');
      $this->form_validation->set_rules('return_date', 'return_date', 'required');
      $this->form_validation->set_rules('remarks', 'remarks', 'required');
      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('ticketing/edit/'.$id));
      }else{ 
        $timeStamp = date('m/d/Y h:i:s a', time());
        $this->ticketing->setTimeStamp($timeStamp);
        $this->ticketing->update_item($id);
        redirect(base_url('ticketing'));
      }
 }


 /**
  * Delete Data from this method.
  *
  * @return Response
 */
 public function delete($id)
 {
     $item = $this->ticketing->delete_item($id);
     redirect(base_url('ticketing'));
 }
}
