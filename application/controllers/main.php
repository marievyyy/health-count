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

	public function api_profile(){
		
		$options = [
    		'cost' => 11,
 			'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
		];

		$token = $this->functions->guid();

		$params["patient_id"] = $token;
		$params["patient_name"] = $this->input->post('patient_name');
		$params["birth_date"] = $this->input->post('birth_date');
		$params["gender"] = $this->input->post('gender');
		$params["weight"] = $this->input->post('weight');
		$params["height"] = $this->input->post('height');
		$params["username"] = $this->input->post('username');
		$params["password"] = password_hash(md5($this->input->post('password')),PASSWORD_BCRYPT, $options);
		$params["date_registered"] = date('Y-m-d');
		$params["submitted"] = $this->input->post('submitted');

		$get_token = $this->functions->api_getToken();

		if(array_search($token, $get_token) != true){
			if($params["submitted"] == "submitted"){
				$this->functions->register_profile($params);
				echo json_encode($params);			
			}
		}
		$this->load->view('api_register');	
	}

	public function api_getAllPatient(){
		$result = $this->functions->api_getProfile();
		echo json_encode($result);
	}

	public function api_logIn(){

		$this->load->view('api_login');
	}

	public function api_food(){

		$this->load->view('api_food');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */