<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/21/2018
 * Time: 12:59
 */

class Province extends CI_Model
{
	var $table = 'province';

	public function getName() {
		$this->db->select('name');
		$this->db->order_by('name', 'asc');
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
}
