<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Order_details extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_order_details');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_order_details->getall();
		$this->load->view('v_order_details', $data);
	}
}
?>