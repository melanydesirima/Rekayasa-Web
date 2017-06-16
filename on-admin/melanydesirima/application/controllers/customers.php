<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Customers extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_customers');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_customers->getall();
		$this->load->view('v_customers', $data);
	}
}
?>