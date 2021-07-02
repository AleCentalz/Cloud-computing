<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function get_usuario($email, $pass)
	{
		$this->db->where('email', $email);
		$this->db->where('pass', $pass);
		$query = $this->db->get('usuarios');

		return $query->row();
	}
}
