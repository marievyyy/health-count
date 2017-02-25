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
			$this->load->view('view_homepage');
		}
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
				$this->load->view('view_sleep');
			}else{
				echo "Unknown Error";
			}	
		}else{
			header("Location: http://localhost/health/main/register");
		}
	}

	public function meditation(){
		$this->load->view('view_meditation');
	}

	public function about(){
		$this->load->view('view_about');
	}

	public function editprofile(){
		if (isset($_SESSION["patient_id"]) == true && !empty($_SESSION["patient_id"]) == true) {

			$result = $this->functions->getPatient_id($_SESSION["patient_id"]);
			if ($result == 'existing account') {
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
			if (preg_match("/[\d\W]/", $register["password"]) == true && $register["password"] == $register["conpassword"] && $passwordLength >= 6 && $passwordLength <= 255) {
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
		if (is_array($resultWaterAPI) == true) {
			$resultWater = array(
					'water_amount' => $resultWaterAPI["water_amount"],
					'gained_water' => $resultWaterAPI["gained_water"],
					'urine' => $resultWaterAPI["urine"]
				);
			echo json_encode($resultWater);
		}else{
			//if no data then create new one for today
			//this also check  for existing activities today and tally the duration.
			if (is_array($resultAct) == true) {

				$sum = strtotime('00:00:00');
				$sum2=0;
				//parse the data activites for today and sum the total.
				foreach ($resultAct as $i) {
					foreach ($i as $key => $item) {
						$sum1=strtotime($item)-$sum;
						$sum2 = $sum2+$sum1;
					}
				}	
				$sum3=$sum+$sum2;
				$str_time = date("H:i:s",$sum3);
				//$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $str_time);
				sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);
				//convet time to total minutes
				$time_min = $hours * 60 + $minutes;

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
				
			}else{
				//if there is no activites for today compute using weight only.
				$amountWater = $_SESSION["weight"] * 0.5;
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
		function calculateWaterVal($addedglassVal, $oldglassVal, $amountWater, $actDuration_new, $urineColor){
			$urineVal = 0;
			$urineWater = 0;
			$oztoLiters = 0.0295735;
			$actualWater = $amountWater;

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
				$weightWater = $_SESSION["weight"] * 0.5;
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
					'actDuration_total' => $actDuration_new,
					'urine' => $urineColor 
				);
			return $resultWater;
		}

		//this update if there is an additional activities for today.
		if (is_array($resultAct) == true) {

			$sum = strtotime('00:00:00');
			$sum2=0;
			$newDuration=0;
			$actDuration_new=0;
			foreach ($result as $i) {
				foreach ($i as $key => $item) {
					$sum1=strtotime($item)-$sum;
					$sum2 = $sum2+$sum1;
				}
			}	
			$sum3=$sum+$sum2;
			$str_time = date("H:i:s",$sum3);
			//$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $str_time);
			sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);
			$time_min = $hours * 60 + $minutes;

			//get the actual duration for today's activitiy
			if ($time_min = $resultWaterAPI["actDuration_total"]) {
				$newDuration = 0;
			}else{
				$newDuration = $time_min - $resultWaterAPI["actDuration_total"];
				$actDuration_new = $time_min;
			}
			
			$totalValue = ($newDuration/30) * (12*0.0295735);
			$totalLitersAdded = round($totalValue * $oztoLiters, 2);

			$amountWater = $resultWaterAPI["water_amount"] + $totalLitersAdded;

			$resultCal = calculateWaterVal($addedglassVal, $oldglassVal, $amountWater, $actDuration_new, $urineColor);
			
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
			$actDuration_new = '00:00:00';

			$resultCal = calculateWaterVal($addedglassVal, $oldglassVal, $amountWater, $actDuration_new, $urineColor);
			
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
		$resultProfile = $this->functions->getUserLog($_SESSION["patient_id"]);


				

	}

	public function foodAdd($fname, $carbs, $fats, $protein, $calories, $description, $category_name){
		
		$foodDetails = array(
				"food_name" => $fname,
				"carbs" => $carbs,
				"fats" => $fats,
				"protein" => $protein,
				"calories" => $calories,
				"description" => $description,
				"category_name" => $category_name
			);

		$result = $this->functions->insertFoodDetails($foodDetails);

		echo "\n Success \n";
		var_dump($result);
	}

	public function testUpload(){
		$imageUpload = $this->input->post("formdata");
		
		echo json_encode($imageUpload);

	}
}
/* End of file main.php */
/* Location: ./application/controllers/main.php */