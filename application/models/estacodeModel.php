<?php


class estacodeModel extends CI_Model{
    private $_timeStamp;
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
    public function __construct() {
        $this->load->database();
    }

    public function get_estacode(){
        if(!empty($this->input->get("search"))){
          $this->db->like('user_id', $this->input->get("search"));
          $this->db->or_like('serial', $this->input->get("search")); 
        }
        $this->db->select('*');
        $this->db->from('estacode');
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
            'program_title' => $this->input->post('program_title'),
            'program_type' => $this->input->post('program_type'),
            'program_country' => $this->input->post('program_country'),
            'long_haul' => $this->input->post('long_haul'),
            'trip_start_date' => $this->input->post('trip_start_date'),
            'trip_end_date' => $this->input->post('trip_end_date'),
            'remarks' => $this->input->post('remarks'),
            'time_added' => $this->_timeStamp,
            'time_updated' => $this->_timeStamp
        );
        return $this->db->insert('estacode', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'user_id' => $this->input->post('user_id'),
            'serial' => $this->input->post('serial'),
            'voucher_no' => $this->input->post('voucher_no'),
            'voucher_date' => $this->input->post('voucher_date'),
            'voucher_amount' => $this->input->post('voucher_amount'),
            'voucher_currency' => $this->input->post('voucher_currency'),
            'program_title' => $this->input->post('program_title'),
            'program_type' => $this->input->post('program_type'),
            'program_country' => $this->input->post('program_country'),
            'long_haul' => $this->input->post('long_haul'),
            'trip_start_date' => $this->input->post('trip_start_date'),
            'trip_end_date' => $this->input->post('trip_end_date'),
            'remarks' => $this->input->post('remarks'),
            'time_updated' => $this->_timeStamp
        );
        if($id==0){
            return $this->db->insert('estacode',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('estacode',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('estacode', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('estacode', array('id' => $id));
    }
}
?>