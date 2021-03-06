<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class main extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('functions');
	}
	//Start of addding/loading HTML Page to view in website
	public function index(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {
			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);

			if ($result == 'existing account') {
				header("Location: http://localhost/health/main/home");
			}else{
				echo "Unknown Error";
			}	
		}else{
			unset($_SESSION["pagenum"]);
			$this->load->view('view_homepage');
		}
	}

	public function newfood(){
		unset($_SESSION["pagenum"]);
		$this->load->view('foodCMS');
	}
	public function logout(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {
			session_unset();
			session_destroy();
			header("Location: http://localhost/health/main/");	
		}else{
			$this->load->view('view_login');
		}
	}

	public function login(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {
			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);

			if ($result == 'existing account') {
				header("Location: http://localhost/health/main/home");
			}else{
				echo "Unknown Error";

			}	
		}else{
			$this->load->view('view_login');
		}
	}

	public function register(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {
			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);

			if ($result == 'existing account') {
				header("Location: http://localhost/health/main/home");
			}else{
				echo "Unknown Error";

			}	
		}else{
			$this->load->view('view_registration');
		}
	}

	public function food(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_food');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function water(){

		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_water');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function coffee(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_coffee');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function activity(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_activity');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function activityrun(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_activityrun');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function activityexer(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_activityexer');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function activitywork(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_activitywork');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function sleep(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_sleep');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function meditation(){
		unset($_SESSION["pagenum"]);
		$this->load->view('view_meditation');
	}

	public function about(){
		unset($_SESSION["pagenum"]);
		$this->load->view('view_about');
	}

	public function editprofile(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				unset($_SESSION["pagenum"]);
				$this->load->view('view_editprofile');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function uploadview(){
		$this->load->view('uploadimage');
	}

	public function home(){

		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				$this->load->view('view_loginhome');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/");
		}
	}

	public function profile(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
				$this->load->view('view_profile');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/");
		}
	}
	//End of Adding/loading HTML Pages


	//Registration Configuration
	public function data_register(){
		
		//Data Retrieve from AJAX
		$register = array();
		$register['patient_name'] = $this->input->post('fullname');
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
		//End of Retrieving

		//Error Result when parameters are invalid, doesn't save in database
		$errorResultName = "Error Name";
		$errorResultUsername = "Error Username";
		$errorResultPass = "Error Password";
		$errorResultAge = "Error Age";
		$errorResultBirth = "Error Birthday";
		$errorResultWeight = "Invalid weight input";
		$errorResultHeight = "Invalid height input";
		//Note of valid parameter
		$pass = "passed";

		//remove spaces from first to last string for name and username
		trim($register["patient_name"]);
		trim($register["username"]);

		//change double space for name
		$register['patient_name'] = preg_replace("/!\s+!/", ' ', $register['patient_name']);
		//age convert to integer
		$register["age"] = intval($register["age"]);
		//extract birthday into array
		list($byear, $bday, $bmonth) = explode("-", $register["birth_date"]);
		list($yyyy, $mm, $dd) = explode("/", date("Y/m/d"));
		//parameter validation value
		$yyyyToday = $yyyy - 6;
		$ageToday;
		

		//get total character inputed
		$usernameLength = strlen($register['username']);
		$passwordLength = strlen($register["password"]);
		$nameLength = strlen($register['patient_name']);

		$this->load->model('functions');
		
		//username validation
		if(preg_match("/\W/", $register["username"]) == false && $usernameLength >= 6 && $usernameLength <= 255){
			//password validation
			if (preg_match("/[\w\d\W]/", $register["password"]) == true && $register["password"] == $register["conpassword"] && $passwordLength >= 6 && $passwordLength <= 255) {
				//name validation
				if (preg_match("/[^a-zA-Z ]/", $register["patient_name"]) == false && $nameLength >= 8 && $nameLength <= 255) {
						//age validation
						if(is_int($register["age"]) == true && $register["age"] >= 6 && $register["age"] <= 89){
							//birthdate validation
							if ($bmonth < $mm && $bday > $dd) {
								$ageToday = $yyyy - $byear;
							}else{
								$ageToday = $yyyy - $byear - 1;
							}
							if ($byear < $yyyyToday && $register["age"] == $ageToday) {
								//height validation
								if(empty($register['height']) != true && is_numeric($register['height']) == true && $register['height'] >= 126.9 && $register['height'] <= 193.0){
									//weight validation
									if (empty($register['weight']) != true && is_numeric($register['weight']) == true && $register['weight'] >= 20 && $register['weight'] <= 1000) {

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
										//password encryption
										$register["password"] = password_hash($register["password"], PASSWORD_BCRYPT);

										$this->functions->register_profile($register);
										//when data is valid
										echo json_encode($pass);

									}else{
										echo json_encode($errorResultWeight);
									}
								}else{
									echo json_encode($errorResultHeight);
								}
							}else{
								echo json_encode($errorResultBirth);
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

	//check if Username exist
	public function checkuserName(){
		$params = $this->input->post('username');
		$result1 = "No spacing";
		$result2 = "length invalid";
		$result3 = "Not a valid username";

		$this->load->model('functions');
		$params = trim($params);
		$userLength = strlen($params);
		//error handler for Username input
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

	//login controller and security
	public function getUser(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$out = "Valid";
		$out2 = "Not";

		$this->load->model('functions');
		$username = trim($username);
		$result = "valid username";

		$resultUsername = $this->functions->getUserAccount($username);
		//bypass security for database insert

		if (is_array($resultUsername) == true) {
			$result = password_verify($password, $resultUsername["password"]);
			if ($result == true) {
				$_SESSION["patient_id"] = $resultUsername["patient_id"];
				$_SESSION["username"] = $resultUsername["username"];
				$_SESSION["weight"] = $resultUsername["weight"];
				$_SESSION["height"] = $resultUsername["height"];
				$_SESSION["bmi"] = $resultUsername["bmi"];
				$_SESSION["age"] = $resultUsername["age"];
				echo json_encode($out);
			}else{
				echo json_encode($out2);
			}
		}else{
			echo json_encode($out2);
		}
	}

	public function foodAdd(){
		$fname = $this->input->post("foodname");
		$carbs = $this->input->post("carbs");
		$fats = $this->input->post("fats");
		$protein = $this->input->post("protein");
		$calories = $this->input->post("calories");
		$description = $this->input->post("description");
		$categoryname = $this->input->post("categoryname");

		$foodDetails = array(
				"food_name" => $fname,
				"carbs" => $carbs,
				"fats" => $fats,
				"protein" => $protein,
				"calories" => $calories,
				"description" => $description,
				"category_name" => $categoryname
			);

		$result = $this->functions->insertFoodDetails($foodDetails);

		echo json_encode($foodDetails);
		
	}
}
/* End of file main.php */
/* Location: ./application/controllers/main.php */