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

	//water controller
	public function waterAPI(){
		
		//get today's data
		$resultWaterAPI = $this->functions->getWaterAPI($_SESSION["patient_id"]);
		$resultAct = $this->functions->getActDurationToday($_SESSION["patient_id"]);
		$oztoLiters = 0.0295735;
		//if there is already data for today then output it.
		if (is_array($resultAct) == true) {
			if (is_array($resultWaterAPI) == true) {
				
				//if there is an activity and there is no existing water data 
				$sum2=0;
				//parse the data activites for today and sum the total.
				foreach ($resultAct as $i) {
					foreach ($i as $key => $item) {
						$sum2 = $sum2+$item;
					}
				}	

				//total minutes
				$time_min = $sum2;

				if ($sum2 == $resultWaterAPI["actDuration_Total"]) {
					$newDuration = 0;

				}else{
					$newDuration = $sum2 - $resultWaterAPI["actDuration_Total"];

				}
				
				$totalValue = ($newDuration/30) * (12*0.0295735);
				$totalLitersAdded = round($totalValue * $oztoLiters, 2);

				$amountWater = $resultWaterAPI["water_amount"] + $totalLitersAdded;

				$resultWater = array(
					'patient_id' => $_SESSION['patient_id'],
					'water_amount' => $amountWater,
					'gained_water' => $resultWaterAPI["gained_water"],
					'actDuration_total' => $time_min,
					'urine' => "urine-three" 
				);
				
				//do not save in the database the negative output, if exceed remains zero
					$this->functions->updateWaterAPI($resultWater);
					echo json_encode($resultWater);			

			}else{
				//if there is an activity but there is no existing water data 
				$sum2=0;
				//parse the data activites for today and sum the total.
				foreach ($resultAct as $i) {
					foreach ($i as $key => $item) {
						$sum2 = $sum2+$item;
					}
				}	

				//total minutes
				$time_min = $sum2;

				//get total total needed water with parameters of weight and activites round it to two.
				$amountWater = $_SESSION["weight"] * 0.5;
				$totalValue = $amountWater  + (($time_min/30) * (12*0.0295735));
				$totalLiters = round($totalValue * $oztoLiters, 2);

				$params = array(
						'patient_id' => $_SESSION["patient_id"], 
						'actDuration_total' => $time_min,
						'weather' => '',
						'urine' => '',
						'gained_water' => '',
						'water_amount' => $totalLiters
					);
				//result
				$this->functions->insertWaterAPI($params);
				echo json_encode($totalLiters);
			}
		}else{
			if (is_array($resultWaterAPI) == true) {
				//if there is no activity but there is an existing water data
				$resultWater = array(
					'water_amount' => $resultWaterAPI["water_amount"],
					'gained_water' => $resultWaterAPI["gained_water"],
					'urine' => $resultWaterAPI["urine"]
				);
				echo json_encode($resultWater);
			}else{
				//if there is no activites for today compute using weight only.
				$amountWater = ($_SESSION["weight"]*2.20) * 0.5;
				$totalLiters = round($amountWater * $oztoLiters, 2);

				$params = array(
						'patient_id' => $_SESSION["patient_id"], 
						'actDuration_total' => '00:00:00',
						'weather' => '',
						'urine' => '',
						'gained_water' => '',
						'water_amount' => $totalLiters
					);
				//result
				$this->functions->insertWaterAPI($params);
				echo json_encode($totalLiters);
			}
		}
	}

	//use to update data when input a glass.
	public function updateWaterIntake(){
		$addedglassVal = $this->input->post('glassVal');
		$urineColor = $this->input->post('urineColor');
		$oztoLiters = 0.0295735;

		$resultWaterAPI = $this->functions->getWaterAPI($_SESSION["patient_id"]);
		$resultAct = $this->functions->getActDurationToday($_SESSION["patient_id"]);

		$oldglassVal = $resultWaterAPI["gained_water"];

		//calculation for the total value of water base on amount of glass
		function calculateWaterVal($addedglassVal, $oldglassVal, $amountWater, $time_min, $urineColor){
			$urineVal = 0;
			$urineWater = 0;
			$oztoLiters = 0.0295735;
			$actualWater = $amountWater;
			$durationTime = $time_min;

			$gainedWater = $addedglassVal * $oztoLiters;
			$totalWater = round($amountWater - $gainedWater, 2);

			if ($urineColor == "urine-one") {
				$urineVal = 0.00;
				$totalWater = 0.00;
			}
			else if ($urineColor == "urine-two") {
				$urineVal = 0.00;
				$totalWater = 0.00;
			}
			else if ($urineColor == "urine-three" || $urineColor == "urine-four") {
				$urineVal = 0;
			}
			else if ($urineColor == "urine-five") {
				$urineVal = 0.35;
			}
			else if ($urineColor == "urine-six") {
				$urineVal = 0.50;
			}
			else if ($urineColor == "urine-seven") {
				$urineVal = 0.60;
			}else{
				$urineVal = 0;
			}
			//0.059147
			if ($amountWater <= 0 && $urineColor != "urine-one" && $urineColor != "urine-two") {
				$weightWater = ($_SESSION["weight"]*2.20) * 0.5;
				$roundweightWater = round($weightWater * $oztoLiters, 2);
				$urineWater = abs($roundweightWater * $urineVal);

			}else{
				$urineWater = abs($actualWater * $urineVal);
			}

			$glassVal = $oldglassVal + $addedglassVal;
			$amountVal = round($totalWater + $urineWater, 2);
			if ($amountVal < 0.00) {
				$amountVal = $urineWater;
			}else{
				$amountVal = $amountVal;
			}

			$resultWater = array(
					'patient_id' => $_SESSION['patient_id'],
					'water_amount' => $amountVal,
					'gained_water' => $glassVal,
					'actDuration_total' => $time_min,
					'urine' => $urineColor 
				);
			return $resultWater;
		}

		//this update if there is an additional activities for today.
		if (is_array($resultAct) == true) {

			$newDuration;
			$sum2=0;
			//parse the data activites for today and sum the total.
			foreach ($resultAct as $i) {
				foreach ($i as $key => $item) {
					$sum2 = $sum2+$item;
				}
			}	

				//total minutes
			$time_min = $sum2;

			//get the actual duration for today's activitiy
			if ($sum2 == $resultWaterAPI["actDuration_Total"]) {
				$newDuration = 0;

			}else{
				$newDuration = $sum2 - $resultWaterAPI["actDuration_Total"];

			}
			
			$totalValue = ($newDuration/30) * (12*0.0295735);
			$totalLitersAdded = round($totalValue * $oztoLiters, 2);

			$amountWater = $resultWaterAPI["water_amount"] + $totalLitersAdded;

			$resultCal = calculateWaterVal($addedglassVal, $oldglassVal, $amountWater, $time_min, $urineColor);
			//do not save in the database the negative output, if exceed remains zero
			if ($resultCal["water_amount"] > 0.00) {
				$this->functions->updateWaterAPI($resultCal);
				echo json_encode($resultCal);
			
			}else{
				$this->functions->updateWaterAPI($resultCal);
				echo json_encode($resultCal);
			}			

		}else{
			//if there is no activities use this
			$amountWater = $resultWaterAPI["water_amount"];
			$time_min = 0;
			$resultCal = calculateWaterVal($addedglassVal, $oldglassVal, $amountWater, $time_min, $urineColor);
			
			//do not save in the database the negative output, if exceed remains zero
			if ($resultCal["water_amount"] > 0.00) {
				$this->functions->updateWaterAPI($resultCal);
				echo json_encode($resultCal);
			
			}else{
				$this->functions->updateWaterAPI($resultCal);
				echo json_encode($resultCal);
			}	
		}
	}

	public function getcoffeeAPI(){
		$coffeeType = $this->input->post('coffeeType');
		$coffeeCupVal = $this->input->post('coffeeCupVal');

		//no cafe au lait
		$caffeineContent;
		$sumCaffeine;
		$sumServings;

		if ($coffeeType == 'espresso') {
			$caffeineContent = 77; //1.5 fl.oz. only the rest 8 fl.oz.
		}
		if ($coffeeType == 'cappuccino') {
			$caffeineContent = 102.7;
		}
		if ($coffeeType == 'americano') {
			$caffeineContent = 102.7;
		}
		if ($coffeeType == 'cafelatte') {
			$caffeineContent = 71;
		}
		if ($coffeeType == 'mocha') {
			$caffeineContent = 83.5;
		}
		if ($coffeeType == 'caramel') {//google search
			$caffeineContent = 75;
		}
		if ($coffeeType == 'frappe') {
			$caffeineContent = 75.8;
		}
		if ($coffeeType == 'instantcoffee') {
			$caffeineContent = 57;
		}

		$totalcaffeine = round($caffeineContent * $coffeeCupVal, 2);

		$resultCoffeeCaffeine = $this->functions->getCoffeeStatus($_SESSION["patient_id"]);

		//when there is record sum the servings and caffeine to get the total intake 
		if ($resultCoffeeCaffeine != 'no caffeine record') {

			$sumServings = $resultCoffeeCaffeine["total_servings"];
			$sumCaffeine = $resultCoffeeCaffeine["total_gained"];

			$totalServings = $sumServings + $coffeeCupVal;
			$gainedCaffeine = round($sumCaffeine + $totalcaffeine, 2);

		}else{
			//when no record insert default data
			$coffeeStatus = array(
				'patient_id' => $_SESSION["patient_id"],
				'status' => "Normal",
				'total_gained' => 0,
				'total_servings' => 0 
			);

			$this->functions->insertCoffeeStatus($coffeeStatus);

			$totalServings = $coffeeCupVal;
			$gainedCaffeine = $totalcaffeine;
		}
		
		$resultCoffeeCaffeine = $this->functions->getCoffeeStatus($_SESSION["patient_id"]);

		//data to be insert in caffeine_intake table
		$coffeeIntake = array(
				'caffeine_id' => $resultCoffeeCaffeine["caffeine_id"],
				'coffeeType' => $coffeeType,
				'coffeeCupVal' => $coffeeCupVal,
				'totalcaffeine' => $totalcaffeine
			);

		$this->functions->insertCoffee($coffeeIntake);

		//too higher to drink coffee
		if ($gainedCaffeine > 400 && $_SESSION["age"] >= 19) {
				$statusCaffeine = "High Caffeine!!!";
			}
		else if ($gainedCaffeine > 100 && $_SESSION["age"] < 19 && $_SESSION["age"] > 10) {
				$statusCaffeine = "High Caffeine!!!";
		}
		else if ($gainedCaffeine > 10 && $_SESSION["age"] <= 10) {
				$statusCaffeine = "High Caffeine!!!";
		}
		//normal iantake of caffeine
		else if ($gainedCaffeine <= 400 && $_SESSION["age"] >= 19 || $gainedCaffeine <= 100 && $_SESSION["age"] < 19 && $_SESSION["age"] > 10) {
				$statusCaffeine = "Normal";
		}
		else{
				$statusCaffeine = "Undefined Status";
		}

		//update data for todays record
		$coffeeStatusUpdate = array(
				'caffeine_id' => $resultCoffeeCaffeine["caffeine_id"],
				'patient_id' => $_SESSION["patient_id"],
				'status' => $statusCaffeine,
				'total_gained' => $gainedCaffeine,
				'total_servings' => $totalServings
			);

		$this->functions->updateCoffeeStatus($coffeeStatusUpdate);

		$resultData = array(
				'total_gained' => $gainedCaffeine,
				'totalcaffeine' => $totalcaffeine,
				'statusCaffeine' => $statusCaffeine
			);

		echo json_encode($resultData);
	}

	public function profileAPI(){
		$resultProfile = $this->functions->getUserLog($_SESSION["patient_id"]);
		echo json_encode($resultProfile);
	}

	public function editprofileAPI(){

		//Data Retrieve from AJAX
		$params = array();
		$params['patient_id'] = $_SESSION["patient_id"];
		$params['patient_name'] = $this->input->post('fullname');
		$params['profile_picture'] = '';
		$params['bmi'] = '';
		$params['bmi_status'] = '';
		$params['age'] = $this->input->post('age');;
		$params['birth_date'] = $this->input->post('birthday');
		$params['gender'] = $this->input->post('gender');
		$params['weight'] = $this->input->post('weight');
		$params['height'] = $this->input->post('height');
		$params['username'] = $this->input->post('username');
		$params['oldpassword'] = $this->input->post('oldPass');
		$params['password'] = $this->input->post('pass');
		$params['conpassword'] = $this->input->post('cpass');
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
		trim($params["patient_name"]);
		trim($params["username"]);

		//change double space for name
		$params['patient_name'] = preg_replace("/!\s+!/", ' ', $params['patient_name']);
		//age convert to integer
		$params["age"] = intval($params["age"]);
		//extract birthday into array
		list($byear, $bday, $bmonth) = explode("-", $params["birth_date"]);
		list($yyyy, $mm, $dd) = explode("/", date("Y/m/d"));
		//parameter validation value
		$yyyyToday = $yyyy - 6;
		$ageToday;

		//get total character inputed
		$usernameLength = strlen($params['username']);
		$passwordLength = strlen($params["password"]);
		$nameLength = strlen($params['patient_name']);

		$this->load->model('functions');
		
		//username validation
		if(preg_match("/\W/", $params["username"]) == false && $usernameLength >= 6 && $usernameLength <= 255){
			//password validation
			if (preg_match("/[\d\W]/", $params["password"]) == true && $params["password"] == $params["conpassword"] && $passwordLength >= 6 && $passwordLength <= 255 ||  $params["password"] == "" && $params["conpassword"] == "") {
				//name validation
				if (preg_match("/[^a-zA-Z ]/", $params["patient_name"]) == false && $nameLength >= 8 && $nameLength <= 255) {
						//age validation
						if(is_int($params["age"]) == true && $params["age"] >= 6 && $params["age"] <= 89){
							//birthdate validation
							if ($bmonth < $mm && $bday > $dd) {
								$ageToday = $yyyy - $byear;
							}else{
								$ageToday = $yyyy - $byear - 1;
							}
							if ($byear < $yyyyToday && $params["age"] == $ageToday) {
								//height validation
								if(empty($params['height']) != true && is_numeric($params['height']) == true && $params['height'] >= 126.9 && $params['height'] <= 193.0){
									//weight validation
									if (empty($params['weight']) != true && is_numeric($params['weight']) == true && $params['weight'] >= 20 && $params['weight'] <= 1000) {

										$weightbmi = $params["weight"];
										$heightbmi = $params["height"] / 100;
										$heightbmisq = $heightbmi * $heightbmi;

										$params["bmi"] = $weightbmi / $heightbmisq;
										$params["bmi"] = number_format((float)$params["bmi"], 2,'.','');

										if ($params["height"] >= 126.79 && $params["weight"] >= 24.94 && $params["bmi"] <= 18.5) {
											$params["bmi_status"] = "Underweight";
										}
										else if ($params["height"] >= 126.79 && $params["weight"] >= 24.94 && $params["bmi"] >= 18.5 && $params["bmi"] <= 24.9) {
											$params["bmi_status"] = "Normal";
										}
										else if ($params["height"] >= 126.79 && $params["weight"] >= 24.94 && $params["bmi"] >= 25.0 && $params["bmi"] <= 29.9) {
											$params["bmi_status"] = "Overweight";
										}
										else if ($params["height"] >= 126.79 && $params["weight"] >= 24.94 && $params["bmi"] >= 30.0) {
											$params["bmi_status"] = "Obese";
										}else{
											$params["bmi_status"] = "Unknown Data";
										}
										//password encryption
										if ( $params["password"] == "" &&  $params["conpassword"] == "") {

											$this->functions->updateProfile($params);
											//when data is valid
											echo json_encode($pass);

										}
										else{
											$params["password"] = password_hash($params["password"], PASSWORD_BCRYPT);

											$this->functions->updateProfilePass($params);
											//when data is valid
											echo json_encode($pass);
										}

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

	public function confirmOldPassword(){
		$password = $this->input->post('oldPass');
		$out = "Valid";
		$out2 = "Not";

		$this->load->model('functions');
		$result = "valid username";

		$resultUsername = $this->functions->getUserAccount($_SESSION["username"]);
		//bypass security for database insert
		$result = password_verify($password, $resultUsername["password"]);
			if ($result == true) {
				echo json_encode($out);
			}else{
				echo json_encode($out2);
			}
	}

	public function activitySpeed(){
		$actType = $this->input->post('activityrun');
		$actDis = $this->input->post('distance');
		$actDuration = $this->input->post('timedis');

		$metVal = 0;
		$speed;

		if ($actDuration >= 1 && $actDuration <= 440) {
			
			if ($actType == "jog") {
				$metVal = 8.0;
				
				$actHours = $actDuration / 60;
					$burnedCal = round($metVal * $_SESSION["weight"] * $actHours, 2);

				$params = array(
					'patient_id' => $_SESSION["patient_id"], 
					'activity_name' => $actType,
					'act_duration' => $actDuration,
					'calories_burn' => $burnedCal
					);
				$this->functions->insertActivity($params);

				echo json_encode($burnedCal);
			}
			else if (empty($actType) == true) {
				echo json_encode("No Activity");
			}
			else{
				$speed = round(37.28227153424/ $actDis, 2);

				if ($speed >= 4 && $speed <= 14 && $actType == "run") {

					if ($actType == "run" && $speed = 14) {
						$metVal = 23.0;
					}
					else if ($actType == "run" && $speed >= 13 && $speed < 14) {
						$metVal = 19.8;
					}
					else if ($actType == "run" && $speed >= 12 && $speed < 13) {
						$metVal = 19.0;
					}
					else if ($actType == "run" && $speed >= 11 && $speed < 12) {
						$metVal = 18.0;
					}
					else if ($actType == "run" && $speed >= 10 && $speed < 9) {
						$metVal = 16.0;
					}
					else if ($actType == "run" && $speed >= 9 && $speed < 8.6) {
						$metVal = 15.0;
					}
					else if ($actType == "run" && $speed >= 8.6 && $speed < 8) {
						$metVal = 14.0;
					}
					else if ($actType == "run" && $speed >= 8 && $speed < 7.5) {
						$metVal = 13.5;
					}
					else if ($actType == "run" && $speed >= 7.5 && $speed < 7) {
						$metVal = 12.5;
					}
					else if ($actType == "run" && $speed >= 7 && $speed < 6.7) {
						$metVal = 11.5;
					}
					else if ($actType == "run" && $speed >= 6.7 && $speed < 6) {
						$metVal = 11.0;
					}
					else if ($actType == "run" && $speed >= 6 && $speed < 5.2) {
						$metVal = 10.0;
					}
					else if ($actType == "run" && $speed >= 5.2 && $speed < 5) {
						$metVal = 9.0;
					}
					else if ($actType == "run" && $speed >= 5 && $speed < 4) {
						$metVal = 8.0;
					}
					else if ($actType == "run" && $speed >= 4 && $speed < 5) {
						$metVal = 6.0;
					}
					else{
						$metVal = 0;
					}
					

					$actHours = $actDuration / 60;
					$burnedCal = round($metVal * $_SESSION["weight"] * $actHours, 2);

					$params = array(
						'patient_id' => $_SESSION["patient_id"], 
						'activity_name' => $actType,
						'act_duration' => $actDuration,
						'calories_burn' => $burnedCal
						);
					$this->functions->insertActivity($params);

					echo json_encode($burnedCal);
				}

				else if ($speed >= 2.5 && $speed < 5.0 && $actType == "walk") {
					if ($actType == "walk" && $speed <= 3.5 && $speed > 2.5) {
						$metVal = 3.0;
					}
					else if ($actType == "walk" && $speed <= 5.0 && $speed > 3.5) {
						$metVal = 3.8;
					}
					else if ($actType == "walk" && $speed = 5.0) {
						$metVal = 8.0;
					}
					else{
						$metVal = 0;
					}
					

					$actHours = $actDuration / 60;
					$burnedCal = round($metVal * $_SESSION["weight"] * $actHours, 2);

					$params = array(
						'patient_id' => $_SESSION["patient_id"], 
						'activity_name' => $actType,
						'act_duration' => $actDuration,
						'calories_burn' => $burnedCal
						);
					$this->functions->insertActivity($params);

					echo json_encode($burnedCal);
				}

				else if ($speed >= 5.5 && $speed <= 20 && $actType == "cycling") {
					if ($actType == "cycling" && $speed >= 5.5 && $speed < 10 ) {
						$metVal = 8.0;
					}
					else if ($actType == "cycling" && $speed >= 10 && $speed < 12 ) {
						$metVal = 6.0;
					}
					else if ($actType == "cycling" && $speed >= 12 && $speed < 16 ) {
						$metVal = 8.0;
					}
					else if ($actType == "cycling" && $speed >= 16 && $speed < 20 ) {
						$metVal = 12.0;
					}
					else if ($actType == "cycling" && $speed >= 20 ) {
						$metVal = 16.0;
					}
					else{
						$metVal = 0;
					}
					

					$actHours = $actDuration / 60;
					$burnedCal = round($metVal * $_SESSION["weight"] * $actHours, 2);

					$params = array(
						'patient_id' => $_SESSION["patient_id"], 
						'activity_name' => $actType,
						'act_duration' => $actDuration,
						'calories_burn' => $burnedCal
						);
					$this->functions->insertActivity($params);

					echo json_encode($burnedCal);
				}
				else{
					echo json_encode("Invalid Speed");	
				}
			}


		}else{
			echo json_encode("Invalid Time Duration");
		}

	}

	public function activityExcercise(){
		$actType = $this->input->post('activityrun');
		$actDuration = $this->input->post('duration');
		$metVal = 0;

		if (empty($actType) != true && $actType != "" && $actDuration >= 1 && $actDuration <= 440) {

			switch ($actType) {
				case "pushUp":
					$metVal = 3.8;
					break;
				case 'sitUp':
					$metVal = 2.8;
					break;
				case 'pullUp':
					$metVal = 3.8;
					break;
				case 'jumping':
					$metVal = 3.8;
					break;
				case 'vigor':
					$metVal = 8.0;
					break;
				case 'calisthenics':
					$metVal = 3.5;
					break;
				case 'building':
					$metVal = 3.0;
					break;
				case 'home':
					$metVal = 3.8;
					break;
				case 'aero':
					$metVal = 3.8;
					break;
				default:
					$metVal = 0;
					break;
			}

			$actHours = $actDuration / 60;
			$burnedCal = round($metVal * $_SESSION["weight"] * $actHours, 2);

			$params = array(
				'patient_id' => $_SESSION["patient_id"], 
				'activity_name' => $actType,
				'act_duration' => $actDuration,
				'calories_burn' => $burnedCal
				);
			$this->functions->insertActivity($params);

			echo json_encode($burnedCal);
		}
		else if(empty($actType) == true || $actType == ""){
			echo json_encode("Required Activity Type");
		}
		else if($actDuration < 1 && $actDuration > 440){
			echo json_encode("Invalid Duration");			
		}
		else{
			echo json_encode("Invalid Input");
		}

	}

	public function sleepAPI(){
		$sleepData = $this->functions->getTodaySleep($_SESSION["patient_id"]);
		$sleepExist = "Already Sleep";

		if ($sleepData == "no sleep record") {

			$startSleep = $this->input->post('startSleep');
			$endSleep = $this->input->post('endSleep');
			$startSleepArr = explode(":", $startSleep);
			$endSleepArr = explode(":", $endSleep);
			$totalSleep = array();
			$sleepDuration = 0;

			if ($startSleepArr[0] > $endSleepArr[0] && $startSleepArr[0] > 12) {
				$x = $startSleepArr[0] - 12;
				$j = 12 - $x;

				$totalSleep[0] = $endSleepArr[0] + $j;
				if ($startSleepArr[1] > $endSleepArr[1]) {
					$minSleep = abs($startSleepArr[1] - $endSleepArr[1]);
					$totalSleep[1] = $minSleep / 60;
					$sleepDuration = round($totalSleep[0] - $totalSleep[1],2);
				}
				else{
					$minSleep = abs($startSleepArr[1] - $endSleepArr[1]);
					$totalSleep[1] = $minSleep / 60;
					$sleepDuration = round($totalSleep[0] + $totalSleep[1],2);
				}

			}
			else if ($startSleepArr[0] > $endSleepArr[0] && $startSleepArr[0] < 12) {
				$x = 24 - $startSleep;
				$totalSleep[0] = $endSleepArr[0] + $x;
				if ($startSleepArr[1] > $endSleepArr[1]) {
					$minSleep = abs($startSleepArr[1] - $endSleepArr[1]);
					$totalSleep[1] = $minSleep / 60;
					$sleepDuration = round($totalSleep[0] - $totalSleep[1],2);
				}
				else{
					$minSleep = abs($startSleepArr[1] - $endSleepArr[1]);
					$totalSleep[1] = $minSleep / 60;
					$sleepDuration = round($totalSleep[0] + $totalSleep[1],2);
				}
			}
			else{
				$totalSleep[0] = abs($startSleepArr[0] - $endSleepArr[0]);
				if ($startSleepArr[1] > $endSleepArr[1]) {
					$minSleep = abs($startSleepArr[1] - $endSleepArr[1]);
					$totalSleep[1] = $minSleep / 60;
					$sleepDuration = round($totalSleep[0] - $totalSleep[1],2);
				}
				else{
					$minSleep = abs($startSleepArr[1] - $endSleepArr[1]);
					$totalSleep[1] = $minSleep / 60;
					$sleepDuration = round($totalSleep[0] + $totalSleep[1],2);
				}
			}

			$sleepDesc = "";
			$desc1 = "Normal";
			$desc2 = "Over Sleep";
			$desc3 = "Sleep Deprived";
			$sleepMET = 0.92;

			$totalburn = $sleepMET * $_SESSION["weight"] * $sleepDuration;

			//normal sleep
			if ($_SESSION["age"] >= 6 && $_SESSION["age"] <= 13 && $sleepDuration >= 9 && $sleepDuration <= 11) {
				
				$sleepDesc = $desc1;
			}
			else if ($_SESSION["age"] >= 14 && $_SESSION["age"] <= 17 && $sleepDuration >= 8 && $sleepDuration <= 10) {
				
				$sleepDesc = $desc1;
			}
			else if ($_SESSION["age"] >= 18 && $_SESSION["age"] <= 64 && $sleepDuration >= 7 && $sleepDuration <= 9) {
				
				$sleepDesc = $desc1;
			}
			else if ($_SESSION["age"] >= 65 && $sleepDuration >= 7 && $sleepDuration <= 8) {
				
				$sleepDesc = $desc1;
			}
			//over sleep
			else if ($_SESSION["age"] >= 6 && $_SESSION["age"] <= 13 && $sleepDuration >= 12) {
				
				$sleepDesc = $desc2;
			}
			else if ($_SESSION["age"] >= 14 && $_SESSION["age"] <= 17 && $sleepDuration >= 11) {
				
				$sleepDesc = $desc2;
			}
			else if ($_SESSION["age"] >= 18 && $_SESSION["age"] <= 64 && $sleepDuration >= 10) {
				
				$sleepDesc = $desc2;
			}
			else if ($_SESSION["age"] >= 65 && $sleepDuration >= 9) {
				
				$sleepDesc = $desc2;
			}
			else{
				$sleepDesc = $desc3;
			}
			$params = array(
				'patient_id' => $_SESSION["patient_id"],
				'sleepTotal' => $sleepDuration,
				'sleepDesc' => $sleepDesc,
				'startSleep' => $startSleep,
				'endSleep' => $endSleep,
				'burnCal' => $totalburn
				);
			$this->functions->insertSleep($params);
			echo json_encode($params);
		}
		else{
			echo json_encode("Already Slept");
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

	public function tallyFood(){
		$resultFood = $this->functions->getAllFood();
		$numPage = ceil(sizeof($resultFood) / 5);
		echo json_encode($numPage);
	}

	public function firstFood(){
		$resultFood = $this->functions->getAllFood();
		echo json_encode($resultFood);
	}

	public function paginateFood(){
		$pageVal = $this->input->post("pageVal");

		$resultFood = $this->functions->getAllFood();
		$foodDataSize = sizeof($resultFood);
		$start = ($pageVal * 5) - 5;
		$resultFood = $this->functions->getPaginateFood($start);
		echo json_encode($resultFood);
	}

	public function paginateFoodSearch(){
		$pageVal = $this->input->post("pageVal");
		$fkeyword = $this->input->post('fkeyword');
		$fcat = $this->input->post('fcat');
		$resultFood;

		if (empty($fcat) == true || $fcat == "") {
			$resultFood = $this->functions->searchFoodWord($fkeyword);
			$foodDataSize = sizeof($resultFood);
			$start = ($pageVal * 5) - 5;
			$resultFood = $this->functions->getPaginateFoodKey($start, $fkeyword);

		}
		else if (empty($fkeyword) == true || $fkeyword == "") {
			$resultFood = $this->functions->searchFoodCat($fcat);
			$foodDataSize = sizeof($resultFood);
			$start = ($pageVal * 5) - 5;
			$resultFood = $this->functions->getPaginateFoodCat($start, $fcat);

		}
		else{
			$resultFood = $this->functions->searchFoodKey($fkeyword, $fcat);
			$foodDataSize = sizeof($resultFood);
			$start = ($pageVal * 5) - 5;
			$resultFood = $this->functions->getPaginateFoodSearch($start, $fcat, $fkeyword);
		}
		echo json_encode($resultFood);
	}

	public function pageValNumAdd(){
		$pageadd = $this->input->post('pageadd');

		if (isset($_SESSION["pagenum"]) == true && !empty($_SESSION["pagenum"]) == true && $_SESSION["pagenum"] >= 1) {
			$x= $_SESSION["pagenum"] + $pageadd;
		}else{
			$x = $pageadd + 1;
		}
		$_SESSION["pagenum"] = $x;
		echo json_encode($x);
		
	}
	public function pageValNumMinus(){
		$pageadd = $this->input->post('pageadd');

		$x = $_SESSION["pagenum"] - $pageadd;

		$_SESSION["pagenum"] = $x;
		echo json_encode($x);
		
	}

	public function foodListPage(){
		$fkeyword = $this->input->post('fkeyword');
		$fcat = $this->input->post('fcat');
		$resultFood;
		$results = [];
		if (empty($fcat) == true || $fcat == "") {
			$resultFood = $this->functions->searchFoodWord($fkeyword);
		}
		else if (empty($fkeyword) == true || $fkeyword == "") {
			$resultFood = $this->functions->searchFoodCat($fcat);
		}
		else{
			$resultFood = $this->functions->searchFoodKey($fkeyword, $fcat);

		}
		$numPage = ceil(sizeof($resultFood) / 5);
		array_push($results, $numPage);
		array_push($results, $resultFood);
		echo json_encode($results);
	}

	// public function getFoodList(){
	// 	$fkeyword = $this->input->post('fkeyword');
	// 	$fcat = $this->input->post('fcat');

	// 	if (empty($fcat) == true || $fcat == "") {
	// 		$result = $this->functions->searchFoodWord($fkeyword);
	// 	}
	// 	else if (empty($fkeyword) == true || $fkeyword == "") {
	// 		$result = $this->functions->searchFoodCat($fcat);
	// 	}
	// 	else{
	// 		$result = $this->functions->searchFoodKey($fkeyword, $fcat);
	// 	}
	// 	echo json_encode($result);
	// }

	public function getFoodCal(){
		$checkVal = $this->input->post('checkVal');
		$errorNoVal = "no value";
		$resultDetails;
		$i = 0;
		$totalcalories = 0;
		$totalprotein = 0;
		$totalfats = 0;
		$totalcarbs = 0;

		if (empty($checkVal) == true) {
			echo json_encode($errorNoVal);
		}
		else{
			foreach ($checkVal as $foodname) {
			if ($foodname == "") {
					
				}else{
					$resultDetails[$i]= $this->functions->searchFoodDetails($foodname);
					$i++;
				}
			}
			foreach ($resultDetails as $value) {
				foreach ($value as $nextval){
					$latestNutrients = $this->functions->getFoodNutrients($_SESSION["patient_id"]);
					if ($latestNutrients == 'no food item') {
						$totalcalories = $nextval["calories"];
						$totalcarbs = $nextval["carbs"];
						$totalprotein = $nextval["protein"];
						$totalfats = $nextval["fats"];
					}else{
						$totalcalories = $latestNutrients[0]["total_calories"] + $nextval["calories"];
						$totalcarbs = $latestNutrients[0]["total_carbs"] + $nextval["carbs"];
						$totalprotein = $latestNutrients[0]["total_protein"] + $nextval["protein"];
						$totalfats = $latestNutrients[0]["total_fats"] + $nextval["fats"];
					}
					$foodDetails = array(
							'food_id'=> $nextval["food_id"],
							'patient_id'=> $_SESSION["patient_id"],
							'total_fats'=> $totalfats,
							'total_protein'=> $totalprotein,
							'total_carbs'=> $totalcarbs,
							'total_calories'=> $totalcalories
						);
					$this->functions->insertFoodNutrients($foodDetails);
					}
				}
				echo json_encode("Success");
		}
	}

	public function getTotalCal(){

		$todayCal = $this->functions->getFoodNutrients($_SESSION["patient_id"]);
		if ($todayCal[1]["total_calories"] > $todayCal[0]["total_calories"]) {
			echo json_encode($todayCal[1]["total_calories"]);
		}else{
			echo json_encode($todayCal[0]["total_calories"]);
		}
	}

	public function dailyCalorieGain(){
		$todayTotal = 0;
		$sum2 = 0;
		$dayCal = [];
		$dateCal = [];
		$resultCal = [];

		$start_date = date("Y-m-d", strtotime( "previous sunday"));
		$end_date = date('Y-m-d', strtotime('next saturday'));
		$todayCal = $this->functions->getDailyCalGained($_SESSION["patient_id"], $start_date, $end_date);

		if (empty($todayCal) != true) {
			$dateAdd = $todayCal[0]["date_recorded"];
			foreach ($todayCal as $valuecal) {
				if ($dateAdd == $valuecal["date_recorded"]) {
					$todayTotal = $valuecal["total_calories"] + $sum2;
					$sum2 = $todayTotal;
				}else{
					array_push($dateCal, $dateAdd);
					$dateAdd = $valuecal["date_recorded"];
					array_push($dayCal, $todayTotal);
				}
			}
			array_push($dayCal, $todayTotal);
			array_push($dateCal, $dateAdd);
		}
		else{
			$todayTotal = 0;
		}
		array_push($resultCal, $dayCal, $dateCal);
		echo json_encode($resultCal);

	}

	public function dailyCalorieLoss(){
		$todayTotal = 0;
		$sum2 = 0;
		$dayCal = [];
		$dateCal = [];
		$resultCal = [];

		$start_date = date("Y-m-d", strtotime( "previous sunday"));
		$end_date = date('Y-m-d', strtotime('next saturday'));
		$todayCal = $this->functions->getDailyCalLoss($_SESSION["patient_id"], $start_date, $end_date);

		if (empty($todayCal) != true) {
			$dateAdd = $todayCal[0]["date_recorded"];
			foreach ($todayCal as $valuecal) {
				if ($dateAdd == $valuecal["date_recorded"]) {
					$todayTotal = $valuecal["calories_burn"] + $sum2;
					$sum2 = $todayTotal;
				}else{
					array_push($dateCal,  $dateAdd);
					$dateAdd = $valuecal["date_recorded"];
					array_push($dayCal, $todayTotal);
				}
			}
			array_push($dayCal, $todayTotal);
			array_push($dateCal, $dateAdd);
		}
		else{
			$todayTotal = 0;
		}
		array_push($resultCal, $dayCal, $dateCal);
		echo json_encode($resultCal);

	}

	public function testUpload(){
		$imageUpload = $this->input->post("formdata");
		
		echo json_encode($imageUpload);

	}

	public function homeWaterAPI(){
		$resultWater = $this->functions->getWaterAPI($_SESSION["patient_id"]);

		echo json_encode($resultWater);
	}

	public function homeCoffeeAPI(){
		$resultCoffee = $this->functions->getCoffeeStatus($_SESSION["patient_id"]);

		echo json_encode($resultCoffee);
	}
	public function homeCoffeePieAPI(){
		$start_date = date("Y-m-d", strtotime( "previous sunday"));
		$end_date = date('Y-m-d', strtotime('next saturday'));

		$resultCoffee = $this->functions->getCoffeIntake($_SESSION["patient_id"], $start_date, $end_date);

		$servings["espresso"] = 0;
		$servings["cappuccino"] = 0;
		$servings["americano"] = 0;
		$servings["cafelatte"] = 0;
		$servings["mocha"] = 0;
		$servings["caramel"] = 0;
		$servings["frappe"] = 0;
		$servings["instantcoffee"] = 0;
		//var_dump($resultCoffee);
		foreach ($resultCoffee as $valueCoffee) {
			if ($valueCoffee["caffeine_type"] == 'espresso') {
				$servings["espresso"] = $servings["espresso"] + $valueCoffee["servings"];
			}
			else if ($valueCoffee["caffeine_type"] == 'cappuccino') {
				$servings["cappuccino"] = $servings["cappuccino"] + $valueCoffee["servings"];
			}
			else if ($valueCoffee["caffeine_type"] == 'americano') {
				$servings["americano"] = $servings["americano"] + $valueCoffee["servings"];
			}
			else if ($valueCoffee["caffeine_type"] == 'cafelatte') {
				$servings["cafelatte"] = $servings["cafelatte"] + $valueCoffee["servings"];
			}
			else if ($valueCoffee["caffeine_type"] == 'mocha') {
				$servings["mocha"] = $servings["mocha"] + $valueCoffee["servings"];
			}
			else if ($valueCoffee["caffeine_type"] == 'caramel') {
				$servings["caramel"] = $servings["caramel"] + $valueCoffee["servings"];
			}
			else if ($valueCoffee["caffeine_type"] == 'frappe') {
				$servings["frappe"] = $servings["frappe"] + $valueCoffee["servings"];
			}
			else if ($valueCoffee["caffeine_type"] == 'instantcoffee') {
				$servings["instantcoffee"] = $servings["instantcoffee"] + $valueCoffee["servings"];
			}
			else{

			}
		}

		echo json_encode($servings);
		
	}
}
/* End of file main.php */
/* Location: ./application/controllers/main.php */