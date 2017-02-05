<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class functions extends CI_Model {
	protected $table = 'patient_info';
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function guid() {
		mt_srand((double) microtime() * 10000);
		$charid = strtoupper(md5(uniqid(rand(), true)));
		$hyphen = chr(45);
		$uuid = substr($charid, 2, 8) . $hyphen . substr($charid, 8, 4) . $hyphen . substr($charid, 0, 2);
		return $uuid;
	}

	public function register_profile($params){

			$fields = array(
				'patient_id' => $this->guid(),
				'patient_name' => $params['patient_name'],
				'birth_date' => $params['birth_date'],
				'gender' => $params['gender'],
				'weight' => $params['weight'],
				'height' => $params['height'],
				'profile_picture' => $params['profile_picture'], 
				'bmi' => $params['bmi'], 
				'bmi_status' => $params['bmi_status'], 
				'username' => $params['username'], 
				'password' => $params['password'],
				'date_registered' => $params['date_registered']   
				);

			$this->db->insert('patient_info', $fields);
	}	

	public function getUsername($username){
    	$this->db->where('username', $username);
		$query = $this->db->get('patient_info');
    	if ($query->num_rows() >= 1){
        	return 'already exist';
    	}
    	else{
        	return 'not yet exist';
    	}
	}

	public function getUserLog($username, $password){
		$this->db->where('username', $username);
		$query = $this->db->get('patient_info');
		if ($query->num_rows() >= 1){
        	$data = $query->result_array();
        	return $data[0];
    	}
    	else{
        	return 'not yet exist';
    	}
	}

	public function getPatient_id($patient_id){
    	$this->db->where('patient_id', $patient_id);
		$query = $this->db->get('patient_info');
    	if ($query->num_rows() >= 1){
        	return 'existing account';
    	}
    	else{
        	return 'not existing';
    	}
	}
}

/* End of file functions.php */
/* Location: ./application/models/functions.php */