<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audinance extends CI_Controller {
    public $audinance;
  
/**
    * Get All Data from this method.
    *
    * @return Response
   */
public function __construct() {
    parent::__construct(); 


    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('AudinanceModel');


    $this->audinance = new AudinanceModel;
 }

 /**
  * Display Data this method.
  *
  * @return Response
 */
public function index()
{
    $data['data'] = $this->AudinanceModel->get_audinance();


    $this->load->view('audinance/header');       
    $this->load->view('audinance/home',$data);
    $this->load->view('audinance/footer');
}
}