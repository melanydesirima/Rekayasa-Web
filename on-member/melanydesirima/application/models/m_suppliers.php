<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_suppliers extends CI_Model { 

	function getall() { 
		$ambildata = $this->db->get('suppliers');
			if ($ambildata->num_rows() > 0 ) {
				foreach ($ambildata->result() as $data) {
				$hasil[] = $data;
			}
		return $hasil;
		}
	}
}
?>