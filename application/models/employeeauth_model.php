<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class employeeauth_model extends CI_Model {
    // Declaration of a variables
    private $_employeeID;
    private $_firstName;
    private $_surName;
    private $_email;
    private $_otherName;
    private $_gradelevel;
    private $_Confirmation;
    private $_appointment;
    private $_timeStamp;
    private $_status;
    private $_adminID;
    private $_eventType;
 
    //Declaration of a methods
    public function setEmployeeID($employeeID) {
        $this->_employeeID = $employeeID;
    }
    public function setAdminID($adminID) {
        $this->_adminID = $adminID;
    }
    public function setEventType($eventType) {
        $this->_eventType = $eventType;
    }
    public function setAppointment($appointment) {
        $this->_appointment = $appointment;
    }

    public function setOtherName($otherName) {
        $this->_otherName = $otherName;
    }
 
    public function setFirstname($firstName) {
        $this->_firstName = $firstName;
    }
 
    public function setSurName($surName) {
        $this->_surName = $surName;
    }
 
    public function setEmail($email) {
        $this->_email = $email;
    }
 
    public function setGradeLevel($gradelevel) {
        $this->_gradelevel = $gradelevel;
    }
 
 
    public function setConfirmation($Confirmation) {
        $this->_Confirmation = $Confirmation;
    }
 
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
 
    public function setStatus($status) {
        $this->_status = $status;
    }
 
    //create new user
    public function create() {
        $data = array(
            'employee_id' => $this->_employeeID,
            'appointment' => $this->_appointment,
            'firstname' => $this->_firstName,
            'surname' => $this->_surName,
            'othername' => $this->_otherName,
            'email' => $this->_email,
            'gradelevel' => $this->_gradelevel,
            'confirmation' => $this->_Confirmation,
            'created_date' => $this->_timeStamp,
            'modified_date' => $this->_timeStamp,
            'status' => $this->_status
        );
        $logs = array (
            'admin_id' => $this->_adminID,
            'event_type'=> $this->_eventType,
            'user_id'=> $this->_employeeID,
            'created_date' => $this->_timeStamp,
            'status' => $this->_status
        );
        $this->db->insert('employee', $data);
        $this->db->insert('change_logs', $logs);
        if (!empty($this->db->insert_id()) && $this->db->insert_id() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
   
}
?>
