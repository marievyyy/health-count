<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class main extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index(){
		$this->load->view('view_homepage');
	}

	public function login(){
		$this->load->view('view_login');
	}

	public function register(){
		$this->load->view('view_registration');
	}

	public function food(){
		$this->load->view('view_food');
	}

	public function water(){
		$this->load->view('view_water');
	}

	public function coffee(){
		$this->load->view('view_coffee');
	}

	public function sleep(){
		$this->load->view('view_sleep');
	}

	public function data_register(){
		
		$register = array();
		$register['patient_name'] = 'ryan gabriel';
		$register['profile_picture'] = '';
		$register['bmi'] = '';
		$register['bmi_status'] = '';
		$register['birth_date'] = $this->input->post('birthday');
		$register['gender'] = $this->input->post('gender');
		$register['weight'] = $this->input->post('weight');
		$register['height'] = $this->input->post('height');
		$register['username'] = $this->input->post('username');
		$register['password'] = $this->input->post('pass');
		$register['date_registered'] = date('Y-m-d');
		$register['message'] = 'No return value';
		$register['message2'] = 'patient name';
		$register['submittedVal'] = 'return value';
		trim($register["patient_name"]);

		$this->load->model('functions');

		if (preg_match("/  /i", $register["patient_name"]) == false) {
			

			if(is_numeric($register['weight']) == true && is_numeric($register['height']) == true){
				echo json_encode($register["submittedVal"]);
				// if (is_int($register['age'])) {
					
				// 	//$this->functions->register_profile($register);
				// }else{

				// }
			}else{
				echo json_encode($register["message"]);
			}
		}
		else{
			echo json_encode($register["message2"]);
		}
	}

	public function checkuserName(){
		$params = $this->input->post('username');
		$result1 = "No spacing";
		$result2 = "length invalid";
		$result3 = "Not a valid username";

		$this->load->model('functions');
		$params = trim($params);
		$userLength = strlen($params);

		if (preg_match("/ /i", $params)) {
			echo json_encode($result1);
		}
		else{
			if ($userLength >= 6 && $userLength <= 24) {
				if (preg_match("/\w/", $params)) {
					$result = $this->functions->getUsername($params);
					echo json_encode($result);
				}
				else{
					echo json_encode($result3);
				}	
			}
			else{
				echo json_encode($result2);
			}
		}
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */