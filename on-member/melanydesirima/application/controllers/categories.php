<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Categories extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_categories');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_categories->getall();
		$this->load->view('v_categories', $data);
	}
}
?>