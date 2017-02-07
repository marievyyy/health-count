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
				'age' => $params['age'],
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

	public function getActDurationToday($patient_id){
		$this->db->select('act_duration');
		$this->db->where('date_recorded', date('Y-m-d'));
		$this->db->where('patient_id', $patient_id);
		$this->db->order_by("time_recorded", "desc");
		$query = $this->db->get('activity');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;
    	}
    	else{
        	return 'no excercises';
    	}
	}

	public function getWaterAPI($patient_id){
		$this->db->where('date_recorded', date('Y-m-d'));
		$this->db->where('patient_id', $patient_id);
		$this->db->order_by("time_recorded", "desc");
		$query = $this->db->get('water');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data[0];
    	}
    	else{
        	return 'no water record';
    	}
	}

	public function insertWaterAPI($params){
		$fields = array(
			'patient_id' => $params['patient_id'],
			'actDuration_total' => $params['actDuration_total'],
			'weather' => $params['weather'],
			'urine' => $params['urine'],
			'gained_water' => $params['gained_water'],
			'water_amount' => $params['water_amount'],
			'time_recorded' => date("H:i:s"),
			'date_recorded' => date("Y-m-d")
		);

		$this->db->insert('water', $fields);
	}

	public function updateWaterAPI($params){
		$this->db->where('patient_id', $params['patient_id']);
		$this->db->where('date_recorded', date('Y-m-d'));

		$fields = array(
			'patient_id' => $params['patient_id'],
			'actDuration_total' => $params['actDuration_total'],
			'urine' => $params['urine'],
			'gained_water' => $params['gained_water'],
			'water_amount' => $params['water_amount'],
			'time_recorded' => date("H:i:s"),
			'date_recorded' => date("Y-m-d")
		);

    	$this->db->update('water', $fields
    		);
	}
}

/* End of file functions.php */
/* Location: ./application/models/functions.php */