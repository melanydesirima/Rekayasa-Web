<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Products extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_products');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_products->getall();
		$this->load->view('v_products', $data);
	}
}
?>