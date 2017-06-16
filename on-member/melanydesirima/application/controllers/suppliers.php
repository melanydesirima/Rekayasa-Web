<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Suppliers extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_suppliers');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_suppliers->getall();
		$this->load->view('v_suppliers', $data);
	}
}
?>