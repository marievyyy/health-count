<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class functions extends CI_Model {
	protected $table = 'patient_info';
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function guid() {
		mt_srand((double) microtime() * 10000);
		$charid = strtoupper(md5(uniqid(rand(), true)));
		$hyphen = chr(45);
		$uuid = substr($charid, 2, 8) . $hyphen . substr($charid, 8, 4) . $hyphen . substr($charid, 0, 2);
		return $uuid;
	}

	public function register_profile($params){
		
			$fields = array(
				'patient_id' => $this->guid(),
				'patient_name' => $params['patient_name'],
				'birth_date' => $params['birth_date'],
				'age' => $params['age'],
				'gender' => $params['gender'],
				'weight' => $params['weight'],
				'height' => $params['height'],
				'profile_picture' => $params['profile_picture'], 
				'bmi' => $params['bmi'], 
				'bmi_status' => $params['bmi_status'], 
				'username' => $params['username'], 
				'password' => $params['password'],
				'date_registered' => $params['date_registered']   
				);

			$this->db->insert('patient_info', $fields);
	}	

	public function getUsername($username){
    	$this->db->where('username', $username);
		$query = $this->db->get('patient_info');
    	if ($query->num_rows() >= 1){
        	return 'already exist';
    	}
    	else{
        	return 'not yet exist';
    	}
	}

	public function getUserAccount($username){
		$this->db->where('username', $username);
		$query = $this->db->get('patient_info');
		if ($query->num_rows() >= 1){
        	$data = $query->result_array();
        	return $data[0];
    	}
    	else{
        	return 'not yet exist';
    	}
	}

	public function getUserLog($patient_id){
		$this->db->where('patient_id', $patient_id);
		$query = $this->db->get('patient_info');
		if ($query->num_rows() >= 1){
        	$data = $query->result_array();
        	return $data[0];
    	}
    	else{
        	return 'not yet exist';
    	}
	}

	public function getPatient_id($patient_id){
    	$this->db->where('patient_id', $patient_id);
		$query = $this->db->get('patient_info');
    	if ($query->num_rows() >= 1){
        	return 'existing account';
    	}
    	else{
        	return 'not existing';
    	}
	}

	public function updateProfile($params){
		$this->db->where('patient_id', $params['patient_id']);

			$fields = array(
				'patient_name' => $params['patient_name'],
				'birth_date' => $params['birth_date'],
				'age' => $params['age'],
				'gender' => $params['gender'],
				'weight' => $params['weight'],
				'height' => $params['height'],
				'profile_picture' => $params['profile_picture'], 
				'bmi' => $params['bmi'], 
				'bmi_status' => $params['bmi_status'], 
				'username' => $params['username'] 
				);

			$this->db->update('patient_info', $fields);
	}

	public function updateProfilePass($params){
		$this->db->where('patient_id', $params['patient_id']);

			$fields = array(
				'patient_name' => $params['patient_name'],
				'birth_date' => $params['birth_date'],
				'age' => $params['age'],
				'gender' => $params['gender'],
				'weight' => $params['weight'],
				'height' => $params['height'],
				'profile_picture' => $params['profile_picture'], 
				'bmi' => $params['bmi'], 
				'bmi_status' => $params['bmi_status'], 
				'username' => $params['username'],
				'password' => $params["password"] 
				);

			$this->db->update('patient_info', $fields);
	}

	public function getActDurationToday($patient_id){
		$this->db->select('act_duration');
		$this->db->where('date_recorded', date('Y-m-d'));
		$this->db->where('patient_id', $patient_id);
		$query = $this->db->get('activity');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;
    	}
    	else{
        	return 'no excercises';
    	}
	}

	public function getWaterAPI($patient_id){
		$this->db->where('date_recorded', date('Y-m-d'));
		$this->db->where('patient_id', $patient_id);
		$query = $this->db->get('water');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data[0];
    	}
    	else{
        	return 'no water record';
    	}
	}

	public function insertWaterAPI($params){
		$fields = array(
			'patient_id' => $params['patient_id'],
			'actDuration_total' => $params['actDuration_total'],
			'weather' => $params['weather'],
			'urine' => $params['urine'],
			'gained_water' => $params['gained_water'],
			'water_amount' => $params['water_amount'],
			'time_recorded' => date("H:i:s"),
			'date_recorded' => date("Y-m-d")
		);

		$this->db->insert('water', $fields);
	}

	public function updateWaterAPI($params){
		$this->db->where('patient_id', $params['patient_id']);
		$this->db->where('date_recorded', date('Y-m-d'));

		$fields = array(
			'actDuration_Total' => $params['actDuration_total'],
			'urine' => $params['urine'],
			'gained_water' => $params['gained_water'],
			'water_amount' => $params['water_amount'],
			'time_recorded' => date("H:i:s")
		);

    	$this->db->update('water', $fields
    		);
	}

	public function getCoffeeStatus($patient_id){
		$this->db->where('patient_id', $patient_id);
		$this->db->where('date_recorded', date('Y-m-d'));
		$query = $this->db->get('caffeine_status');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data[0];

    	}
    	else{
        	return 'no caffeine record';
    	}
	}

	public function insertCoffeeStatus($coffeeStatus){
		$fields = array(
			'caffeine_id' => $this->guid(),
			'patient_id' => $coffeeStatus['patient_id'],
			'status' => $coffeeStatus['status'],
			'total_servings' => $coffeeStatus['total_servings'],
			'total_gained' => $coffeeStatus['total_gained'],
			'date_recorded' => date("Y-m-d")
		);

		$this->db->insert('caffeine_status', $fields);
	}

	public function insertCoffee($coffeeIntake){
		$fields = array(
			'caffeine_id' => $coffeeIntake['caffeine_id'],
			'caffeine_type' => $coffeeIntake['coffeeType'],
			'servings' => $coffeeIntake['coffeeCupVal'],
			'gained_caffeine' => $coffeeIntake['totalcaffeine'],
			'time_recorded' => date("H:i:s"),
			'date_recorded' => date("Y-m-d")
		);

		$this->db->insert('caffeine_intake', $fields);
	}

	public function updateCoffeeStatus($coffeeStatusUpdate){
		$this->db->where('patient_id', $coffeeStatusUpdate['patient_id']);
		$this->db->where('caffeine_id', $coffeeStatusUpdate['caffeine_id']);
		$this->db->where('date_recorded', date('Y-m-d'));

		$fields = array(
			'status' => $coffeeStatusUpdate['status'],
			'total_servings' => $coffeeStatusUpdate['total_servings'],
			'total_gained' => $coffeeStatusUpdate['total_gained']
		);

		$this->db->update('caffeine_status', $fields);
	}

	public function insertActivity($params){
		$fields = array(
			'activity_id' => $this->guid(),
			'patient_id' => $params['patient_id'],
			'activity_name' => $params['activity_name'],
			'act_duration' => $params['act_duration'],
			'date_recorded' => date("Y-m-d"),
			'time_recorded' => date("H:i:s"),
			'calories_burn' => $params['calories_burn']
		);

		$this->db->insert('activity', $fields);
	}

	public function getTodaySleep($patient_id){
		$this->db->where('patient_id', $patient_id);
		$this->db->where('date_recorded', date('Y-m-d'));
		$query = $this->db->get('sleep');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data[0];

    	}
    	else{
        	return 'no sleep record';
    	}
	}
	
	public function insertSleep($params){
		$fields = array(
			'patient_id' => $params['patient_id'],
			'calories_burn' => $params['burnCal'],
			'wake_up' => $params['endSleep'],
			'sleep_time' => $params['startSleep'],
			'sleep_duration' => $params['sleepTotal'],
			'sleep_level' => $params['sleepDesc'],
			'date_recorded' => date("Y-m-d")
		);

		$this->db->insert('sleep', $fields);
	}
	public function insertFoodDetails($foodDetails){
		$fields = array(
			'food_id' => $this->guid(),
			'food_name' => $foodDetails['food_name'],
			'tally_submit' => 0,
			'carbs' => $foodDetails['carbs'],
			'fats' => $foodDetails['fats'],
			'protein' => $foodDetails['protein'],
			'calories' => $foodDetails['calories'],
			'description' => $foodDetails['description'],
			'category_name' => $foodDetails['category_name'],
			'date_added' => date("Y-m-d")
		);

		$this->db->insert('food', $fields);
		return $fields;
	}


	public function getAllFood(){
		$this->db->order_by("tally_submit", "asc");
		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function getPaginateFood($start){
		$this->db->order_by("tally_submit", "asc");
		$this->db->limit(5, $start);
		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function getPaginateFoodKey($start, $fkeyword){
		$this->db->like('food_name',$fkeyword);
		$this->db->order_by("tally_submit", "asc");
		$this->db->limit(5, $start);
		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function getPaginateFoodCat($start, $fcat){
		$this->db->where('category_name',$fcat);
		$this->db->order_by("tally_submit", "asc");
		$this->db->limit(5, $start);
		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function getPaginateFoodSearch($start, $fcat, $fkeyword){
		$this->db->like('food_name',$fkeyword);
 		$this->db->where('category_name',$fcat);
 		$this->db->order_by("tally_submit", "asc");
		$this->db->limit(5, $start);
 		$query = $this->db->get('food');
		if ($uery->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function searchFoodKey($keyword, $fcat){
		$this->db->like('food_name',$keyword);
 		$this->db->like('category_name',$fcat);
 		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function searchFoodWord($keyword){
		$this->db->like('food_name',$keyword);
 		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function searchFoodCat($fcat){
 		$this->db->where('category_name',$fcat);
 		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function searchFoodDetails($foodname){
 		$this->db->where('food_name',$foodname);
 		$query = $this->db->get('food');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function insertFoodNutrients($foodDetails){
		$fields = array(
			'food_id' => $foodDetails['food_id'],
			'patient_id' => $foodDetails['patient_id'],
			'total_fats' => $foodDetails['total_fats'],
			'total_protein' => $foodDetails['total_protein'],
			'total_carbs' => $foodDetails['total_carbs'],
			'total_calories' => $foodDetails['total_calories'],
			'time_recorded' => date("H:i:s"),
			'date_recorded' => date("Y-m-d")
		);

		$this->db->insert('calories_intake', $fields);
	}

	public function getFoodNutrients($patient_id){
		$this->db->where('patient_id',$patient_id);
		$this->db->where('date_recorded',date('Y-m-d'));
		$this->db->order_by("time_recorded", "desc");
 		$query = $this->db->get('calories_intake');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function getDailyCalGained($patient_id, $start_date){
		$this->db->where('patient_id',$patient_id);
		$this->db->where('date_recorded', $start_date);
		$this->db->order_by("time_recorded", "desc");
 		$query = $this->db->get('calories_intake');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function getDailyCalLoss($patient_id, $start_date){
		$this->db->where('patient_id',$patient_id);
		$this->db->where('date_recorded', $start_date);
		$this->db->order_by("time_recorded", "desc");
 		$query = $this->db->get('activity');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data[0];

    	}
    	else{
        	return 'no food item';
    	}
	}

	public function getCoffeIntake($patient_id, $start_date, $end_date){
		$this->db->select('caffeine_intake.caffeine_id,caffeine_intake.caffeine_type,caffeine_intake.servings,caffeine_intake.date_recorded,caffeine_status.caffeine_id,caffeine_status.patient_id');
		$this->db->from('caffeine_intake');
		$this->db->join('caffeine_status','caffeine_intake.caffeine_id = caffeine_status.caffeine_id');
		$this->db->where('caffeine_status.patient_id', $patient_id);
		$this->db->where('caffeine_intake.date_recorded >=', $start_date);
		$this->db->where('caffeine_intake.date_recorded <=', $end_date);
		$query = $this->db->get();
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data;

    	}
    	else{
        	return 'no coffee data';
    	}
	}

	public function getWaterChart($patient_id, $start_date){
		$this->db->where('date_recorded', $start_date);
		$this->db->where('patient_id', $patient_id);
		$query = $this->db->get('water');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data[0];
    	}
    	else{
        	return 'no water record';
    	}
	}

	public function getSleepChart($patient_id, $start_date){
		$this->db->where('patient_id', $patient_id);
		$this->db->where('date_recorded', $start_date);
		$query = $this->db->get('sleep');
		if ($query->num_rows() >= 1){
			$data = $query->result_array();
        	return $data[0];

    	}
    	else{
        	return 'no sleep record';
    	}
	}
}

/* End of file functions.php */
/* Location: ./application/models/functions.php */