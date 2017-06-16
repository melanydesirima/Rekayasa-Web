<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_employees extends CI_Model { 

	function getall() { 
		$ambildata = $this->db->get('employees');
			if ($ambildata->num_rows() > 0 ) {
				foreach ($ambildata->result() as $data) {
				$hasil[] = $data;
			}
		return $hasil;
		}
	}
}
?>