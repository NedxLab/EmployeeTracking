<?php


class user_model extends CI_Model{
    private $_timeStamp;
    private $_adminID;
    private $_eventType;
    private $_userID;
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
    public function setUserID($userID) {
        $this->_userID = $userID;
    }

    public function setAdminID($adminID) {
        $this->_adminID = $adminID;
    }
   
    public function setEventType($eventType) {
        $this->_eventType = $eventType;
    }
    public function __construct() {
        $this->load->database();
    }

    public function get_user(){
        if(!empty($this->input->get("search"))){
          $this->db->like('user_id', $this->input->get("search"));
          $this->db->or_like('first_name', $this->input->get("search")); 
        }
        $query = $this->db->get("users");
        return $query->result();
    }


   public function update_item($id) 
    {
        $data=array(
            'user_id' => $this->input->post('user_id'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'contact_no' => $this->input->post('contact_no'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'dob' => $this->input->post('dob'),
            'modified_date' => $this->_timeStamp
        );
        $logs = array (
            'admin_id' => $this->_adminID,
            'event_type'=> $this->_eventType,
            'user_id' => $this->_userID,
            'created_date' => $this->_timeStamp
        );
        if($id==0){
            return $this->db->insert('users',$data);
        }else{
            $this->db->insert('change_logs', $logs);
            $this->db->where('id',$id);
            return $this->db->update('users',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('users', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }
}
?>