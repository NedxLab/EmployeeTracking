<?php


class AudinanceModel extends CI_Model{
    public function __construct() {
        $this->load->database();
    }

    public function get_audinance(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("estacode");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'user_id' => $this->input->post('user_id'),
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
            'remarks' => $this->input->post('remarks')
        );
        return $this->db->insert('estacode', $data);
    }


    public function update_item($id) 
    {
        $data=array(
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
            'remarks' => $this->input->post('remarks')
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