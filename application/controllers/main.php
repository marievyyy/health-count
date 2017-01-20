<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class main extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('functions'));
		//Do your magic here
	}
	public function index()
	{
		$patient_id=NULL;
		$patient_name = NULL;
		$birth_date = NULL;
		$gender = NULL;
		$weight = NULL;
		$height = NULL;
		$profile_picture = NULL;
		$bmi_status = NULL;
		$username = NULL;
		$password = NULL;
		$date_registered = NULL;
		$submitted = NULL;
		extract($_POST);

		$params["patient_id"] = $patient_id;
		$params["patient_name"] = $patient_name;
		$params["birth_date"] = $birth_date;
		$params["gender"] = $gender;
		$params["weight"] = $weight;
		$params["height"] = $height;
		$params["profile_picture"] = $profile_picture;
		$params["bmi_status"] = $bmi_status;
		$params["username"] = $username;
		$params["password"] = $password;
		$params["date_registered"] = $date_registered;

		if (isset($submitted)) {
			var_dump($params);
			$this->functions->profile($params);

		}
		$token = $this->functions->guid();
		var_dump($token);
		$this->load->view('index.php');		
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */