<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
	}

	public function register_profile(){


			$fields = array(
				'patient_id' => $this->guid(), 
				'patient_name' => $this->input->post('patient_name'),
				'birth_date' => $this->input->post('birth_date'),
				'gender' => $this->input->post('gender'),
				'weight' => $this->input->post('weight'),
				'height' => $this->input->post('height'),
				//'profile_picture' => $params["profile_picture"],
				//'bmi' => $params["bmi"],
				//'bmi_status' => $params["bmi_status"],
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'date_registered' => date('m-d-Y')
				);
			$query = $this->db->insert('patient_info', $fields);

			if($query){
            	return true;
        	} else {
            	return false;
        	}
	}

	function guid() {
		mt_srand((double) microtime() * 10000);
		$charid = strtoupper(md5(uniqid(rand(), true)));
		$hyphen = chr(45);
		$uuid = substr($charid, 2, 8) . $hyphen . substr($charid, 8, 4) . $hyphen . substr($charid, 0, 2);
		return $uuid;
	}
}

/* End of file account.php */
/* Location: ./application/models/account.php */