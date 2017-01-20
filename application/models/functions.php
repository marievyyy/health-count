<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class functions extends CI_Model {
	protected $table = 'patient_info';
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function profile($params){

		$fields = array(
			'patient_id' => $params["patient_id"], 
			'patient_name' => $params["patient_name"],
			'birth_date' => $params["birth_date"],
			'gender' => $params["gender"],
			'weight' => $params["weight"],
			'height' => $params["height"],
			'username' => $params["username"],
			'password' => $params["password"],
			'date_registered' => $params["date_registered"]
			);
		$this->db->insert('patient_info', $fields);
	}
}

/* End of file functions.php */
/* Location: ./application/models/functions.php */