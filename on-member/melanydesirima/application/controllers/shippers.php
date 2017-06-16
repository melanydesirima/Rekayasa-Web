<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Shippers extends CI_Controller { 

	public function __Construct() {
		parent ::__construct();
			$this->load->model('m_shippers');
			$this->load->helper('url');
	}
  
	public function index() {
		$data['hasil'] = $this->m_shippers->getall();
		$this->load->view('v_shippers', $data);
	}
}
?>