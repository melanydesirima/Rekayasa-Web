<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_categories extends CI_Model { 

	function getall() { 
		$ambildata = $this->db->get('categories');
			if ($ambildata->num_rows() > 0 ) {
				foreach ($ambildata->result() as $data) {
				$hasil[] = $data;
			}
		return $hasil;
		}
	}
}
?>