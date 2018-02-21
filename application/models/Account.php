<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/20/2018
 * Time: 17:30
 */

class Account extends CI_Model
{
	var $table = 'account';

	public function countAll() {
		return $this->db->count_all($this->table);
	}

	public function getList($total, $start) {
		$this->db->limit($total, $start);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}



}
