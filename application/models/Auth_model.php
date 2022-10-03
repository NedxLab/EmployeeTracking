<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_model extends CI_Model {
    // Declaration of a variables
    private $_userID;
    private $_userName;
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_password;
    private $_contactNo;
    private $_address;
    private $_dob;
    private $_verificationCode;
    private $_timeStamp;
    private $_status;
    private $_adminID;
    private $_eventType;
 
    //Declaration of a methods
    public function setUserID($userID) {
        $this->_userID = $userID;
    }

    public function setAdminID($adminID) {
        $this->_adminID = $adminID;
    }
    public function setEventType($eventType) {
        $this->_eventType = $eventType;
    }
    public function setUserName($userName) {
        $this->_userName = $userName;
    }

    public function setPassword($password) {
        $this->_password = $password;
    }
 
    public function setFirstname($firstName) {
        $this->_firstName = $firstName;
    }
 
    public function setLastName($lastName) {
        $this->_lastName = $lastName;
    }
 
    public function setEmail($email) {
        $this->_email = $email;
    }
 
    public function setContactNo($contactNo) {
        $this->_contactNo = $contactNo;
    }
 
 
    public function setAddress($address) {
        $this->_address = $address;
    }
 
    public function setDOB($dob) {
        $this->_dob = $dob;
    }
 
    public function setVerificationCode($verificationCode) {
        $this->_verificationCode = $verificationCode;
    }
 
    public function setTimeStamp($timeStamp) {
        $this->_timeStamp = $timeStamp;
    }
 
    public function setStatus($status) {
        $this->_status = $status;
    }
 
    //create new user
    public function create() {
        $hash = $this->hash($this->_password);
        $data = array(
            'user_id' => $this->_userID,
            'user_name' => $this->_userName,
            'first_name' => $this->_firstName,
            'last_name' => $this->_lastName,
            'email' => $this->_email,
            'password' => $hash,
            'contact_no' => $this->_contactNo,
            'address' => $this->_address,
            'dob' => $this->_dob,
            'verification_code' => $this->_verificationCode,
            'created_date' => $this->_timeStamp,
            'modified_date' => $this->_timeStamp,
            'status' => $this->_status
        );
        $logs = array (
            'admin_id' => $this->_adminID,
            'event_type'=> $this->_eventType,
            'user_id' => $this->_userID,
            'created_date' => $this->_timeStamp,
            'status' => $this->_status
        );
        $this->db->insert('users', $data);
        $this->db->insert('change_logs', $logs);
        if (!empty($this->db->insert_id()) && $this->db->insert_id() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
       
    // password hash
    public function hash($password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    // generate Unique Username
    public function generateUniqueUserName($tableName, $string, $field, $key = NULL, $value = NULL) {
        $slug = $this->cleanUserName($string);
        $i = 0;
        $params = array();
        $params[$field] = $slug;
        if ($key)
            $params["$key !="] = $value;
        while ($this->db->where($params)->get($tableName)->num_rows()) {
            if (!preg_match('/[0-9]+$/', $slug))
                $slug .= '' . ++$i;
            else
                $slug = preg_replace('/[0-9]+$/', ++$i, $slug);
            $params [$field] = $slug;
        }
        return $slug;
    }

    // clean Username
    public function cleanUserName($string) {
        //Lower case everything
        $string = strtolower(trim($string));
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "", $string);
        $string = rtrim($string, '');
        return $string;
    }

}
?>
