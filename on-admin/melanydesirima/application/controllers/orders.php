<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Orders extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_orders');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_orders->getall();
		$this->load->view('v_orders', $data);
	}
}
?>