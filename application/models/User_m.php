<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function get($table)
	{
		return $this->db->get($table);
	}

	public function insert($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function update($table, $data)
	{
		$this->db->update($table, $data);
	}

	public function getGuruId($idGuru)
	{
		return $this->db->get_where('guru', $idGuru)->row_array();
	}

	public function count() {
		$query = $this->db->query("SELECT count(id_user) AS count_user FROM users");
		$result = $query->result();

		$count = $result[0]->count_user;

        // Convert the string to an integer if needed
        $count = (int)$count;
		return $count;
	}
}