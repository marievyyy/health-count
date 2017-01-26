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