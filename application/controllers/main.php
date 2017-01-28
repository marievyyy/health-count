<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class main extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('account');
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

	public function data_register(){
		//$register['patient_id'] = $this->guid();
		//$register['patient_name'] = $this->input->post('patient_name');
		$register['birth_date'] = $this->input->post('birthday');
		$register['gender'] = $this->input->post('gender');
		$register['weight'] = $this->input->post('weight');
		$register['height'] = $this->input->post('height');
		//$register['profile_picture'] = $params["profile_picture"];
		//$register['bmi'] => $params["bmi"];
		//$register['bmi_status'] = $params["bmi_status"];
		$register['username'] = $this->input->post('username');
		$register['password'] = $this->input->post('pass');
		$register['date_registered'] = date('m-d-Y');
		$register['submit'] = $this->input->post('submit');
		if(isset($register['submit'])){
			var_dump($register);
		}
	}

	public function api_register(){

		$this->load->view('api_register');
				$data = $this->account->register_profile();
				echo json_encode($data);

		}	

	public function api_food(){

		$this->load->view('api_food');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */