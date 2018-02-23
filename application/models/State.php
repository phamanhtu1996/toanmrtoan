<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/21/2018
 * Time: 14:31
 */

class State extends CI_Model
{
	var $table = "district";

	public function getName($prov) {
		$this->db->select('name', 'type');
		$this->db->where('provinceid', "$prov");
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
}
