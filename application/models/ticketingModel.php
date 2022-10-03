<?php


class ticketingModel extends CI_Model{
    private $_timeStamp;
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
    public function __construct() {
        $this->load->database();
    }

    public function get_ticketing(){
        if(!empty($this->input->get("search"))){
          $this->db->like('serial', $this->input->get("search"));
          $this->db->or_like('voucher_no', $this->input->get("search")); 
        }
        $this->db->select('*');
        $this->db->from('ticketing');
        $this->db->where('user_id', $this->session->userdata('ci_seesion_key')['user_id']);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_employee(){
        if(!empty($this->input->get("search"))){
          $this->db->like('voucher_no', $this->input->get("search"));
          $this->db->or_like('voucher_currency', $this->input->get("search")); 
        }
        $query = $this->db->get("employee");
        return $query->result();
    }

    public function insert_item()
    {    
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'employee_id' => $this->input->post('employee_id'),
            'serial' => $this->input->post('serial'),
            'voucher_no' => $this->input->post('voucher_no'),
            'voucher_date' => $this->input->post('voucher_date'),
            'voucher_amount' => $this->input->post('voucher_amount'),
            'voucher_currency' => $this->input->post('voucher_currency'),
            'airline' => $this->input->post('airline'),
            'agent' => $this->input->post('agent'),
            'booking_ref' => $this->input->post('booking_ref'),
            'ticket_no' => $this->input->post('ticket_no'),
            'destination' => $this->input->post('destination'),
            'depart_date' => $this->input->post('depart_date'),
            'return_date' => $this->input->post('return_date'),
            'remarks' => $this->input->post('remarks'),
            'time_added' => $this->_timeStamp,
            'time_updated' => $this->_timeStamp
        );
        return $this->db->insert('ticketing', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'serial' => $this->input->post('serial'),
            'voucher_no' => $this->input->post('voucher_no'),
            'voucher_date' => $this->input->post('voucher_date'),
            'voucher_amount' => $this->input->post('voucher_amount'),
            'voucher_currency' => $this->input->post('voucher_currency'),
            'airline' => $this->input->post('airline'),
            'agent' => $this->input->post('agent'),
            'booking_ref' => $this->input->post('booking_ref'),
            'ticket_no' => $this->input->post('ticket_no'),
            'destination' => $this->input->post('destination'),
            'depart_date' => $this->input->post('depart_date'),
            'return_date' => $this->input->post('return_date'),
            'remarks' => $this->input->post('remarks'),
            'time_updated' => $this->_timeStamp
        );
        if($id==0){
            return $this->db->insert('ticketing',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('ticketing',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('ticketing', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('ticketing', array('id' => $id));
    }
}
?>