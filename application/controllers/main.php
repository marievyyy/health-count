<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class main extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('functions');
		//Do your magic here
	}
	public function index(){

	}

	public function api_profile()
	{
		$patient_name = NULL;
		$birth_date = NULL;
		$gender = NULL;
		$weight = NULL;
		$height = NULL;
		$profile_picture = NULL;
		$username = NULL;
		$password = NULL;
		$submitted = NULL;
		$conpassword = NULL;

		$bmi = "";
		
		extract($_POST);

		$token = $this->functions->guid();

		$params["patient_id"] = $token;
		$params["patient_name"] = $patient_name;
		$params["birth_date"] = $birth_date;
		$params["gender"] = $gender;
		$params["weight"] = $weight;
		$params["height"] = $height;
		$params["profile_picture"] = $profile_picture;
		$params["bmi"] = "";
		$params["bmi_status"] = "";
		$params["username"] = $username;
		$params["password"] = $password;
		$params["date_registered"] = "";
		$params["token"] = $token;

		if (isset($submitted)) {
			if ($password = $conpassword) {
				$conweight = $weight*0.45;
				$conheight = $height*0.025; 
				$exheight = $height^2;
				$bmi = $conweight / $conheight;
				$params["bmi"] = $bmi;
				var_dump($params);
				$this->functions->profile($params);
			}
			
		}
		$this->load->view('index.php', $params);	
	}

	public function getAllPatient(){
		$result = $this->functions->getprofile();
		echo json_encode($result);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */