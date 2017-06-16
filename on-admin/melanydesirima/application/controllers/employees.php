<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Employees extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_employees');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_employees->getall();
		$this->load->view('v_employees', $data);
	}
}
?>