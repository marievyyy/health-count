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
		$register['patient_name'] = $this->input->post('fullname');;
		$register['profile_picture'] = '';
		$register['bmi'] = '';
		$register['bmi_status'] = '';
		$register['age'] = $this->input->post('age');;
		$register['birth_date'] = $this->input->post('birthday');
		$register['gender'] = $this->input->post('gender');
		$register['weight'] = $this->input->post('weight');
		$register['height'] = $this->input->post('height');
		$register['username'] = $this->input->post('username');
		$register['password'] = $this->input->post('pass');
		$register['conpassword'] = $this->input->post('cpass');
		$register['date_registered'] = date('Y-m-d');

		$errorResultName = "Error Name";
		$errorResultUsername = "Error Username";
		$errorResultPass = "Error Password";
		$errorResultAge = "Error Age";
		$errorResultBirth = "Error Birthday";
		$errorResultWeight = "Invalid weight input";
		$errorResultHeight = "Invalid height input";
		$pass = "passed";

		trim($register["patient_name"]);
		trim($register["username"]);

		$register['patient_name'] = preg_replace("/!\s+!/", ' ', $register['patient_name']);
		$register["age"] = intval($register["age"]);
		list($byear, $bday, $bmonth) = explode("-", $register["birth_date"]);
		list($yyyy, $mm, $dd) = explode("/", date("Y/m/d"));
		$yyyyToday = $yyyy -6;
		$ageToday;

		$usernameLength = strlen($register['username']);
		$passwordLength = strlen($register["password"]);
		$nameLength = strlen($register['patient_name']);

		$this->load->model('functions');
		
		
		if(preg_match("/\W/", $register["username"]) == false && $usernameLength >= 6 && $usernameLength <= 255){

			if (preg_match("/[\d\W]/", $register["password"]) == true && $register["password"] == $register["conpassword"] && $passwordLength >= 6 && $passwordLength <= 255) {
				
				if (preg_match("/[^a-zA-Z ]/", $register["patient_name"]) == false && $nameLength >= 8 && $nameLength <= 255) {
						
						if(is_int($register["age"]) == true && $register["age"] >= 6 && $register["age"] <= 89){
							
							if ($bmonth < $mm && $bday > $dd) {
								$ageToday = $yyyy - $byear;
							}else{
								$ageToday = $yyyy - $byear - 1;
							}
							if ($byear < $yyyyToday && $register["age"] == $ageToday) {

								if(empty($register['height']) != true && is_numeric($register['height']) == true && $register['height'] >= 126.9 && $register['height'] <= 193.0){

									if (empty($register['weight']) != true && is_numeric($register['weight']) == true && $register['weight'] >= 20 && $register['weight'] <= 1000) {
										echo json_encode($pass);

										$weightbmi = $register["weight"];
										$heightbmi = $register["height"] / 100;
										$heightbmisq = $heightbmi * $heightbmi;

										$register["bmi"] = $weightbmi / $heightbmisq;
										$register["bmi"] = number_format((float)$register["bmi"], 2,'.','');

										if ($register["height"] >= 126.79 && $register["weight"] >= 24.94 && $register["bmi"] <= 18.5) {
											$register["bmi_status"] = "Underweight";
										}
										else if ($register["height"] >= 126.79 && $register["weight"] >= 24.94 && $register["bmi"] >= 18.5 && $register["bmi"] <= 24.9) {
											$register["bmi_status"] = "Normal";
										}
										else if ($register["height"] >= 126.79 && $register["weight"] >= 24.94 && $register["bmi"] >= 25.0 && $register["bmi"] <= 29.9) {
											$register["bmi_status"] = "Overweight";
										}
										else if ($register["height"] >= 126.79 && $register["weight"] >= 24.94 && $register["bmi"] >= 30.0) {
											$register["bmi_status"] = "Obese";
										}else{
											$register["bmi_status"] = "Unknown Data";
										}

										$register["password"] = password_hash($register["password"], PASSWORD_BCRYPT);

										$this->functions->register_profile($register);

									}else{
										echo json_encode($errorResultWeight);
									}
								}else{
									echo json_encode($errorResultHeight);
								}
							}else{

							}
							
						}else{
							echo json_encode($errorResultAge);
						}
					}
					else{
						echo json_encode($errorResultName);
					}
			}else{
				echo json_encode($errorResultPass);
			}
		}else{
			echo json_encode($errorResultUsername);
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
				if (preg_match("/\W/", $params) == false) {
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

	public function getUsername(){
		$params = $this->input->post('username');

		$this->load->model('functions');
		$params = trim($params);
		$result = "valid username";
		echo json_encode($result);

	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */