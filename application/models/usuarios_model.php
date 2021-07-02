<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function get_usuario($email, $pass){
        $this->db->where('email',$email);
        $this->db->where('clave',$pass);
		$query = $this->db->get('usuarios');  
		
		return $query->row();      
	}

}