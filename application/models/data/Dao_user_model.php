<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_user_model extends CI_Model {

    public function __construct() {

    }

    //consulta usuario unico por username
    public function getUserByUsername($id) {
        $query = $this->db->get_where('users', array('id_users' => $id));
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    //consulta usuario unico por password
    public function validatePass($pass, $id_user) {
        $query = $this->db->get_where('users', array('contrasena' => $pass, 'id_users' => $id_user));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return null;
        }
    }

    // obtiene todos los ingenieros y su id
    public function getEngineers() {
        $query = $this->db->query("
			SELECT id_usuario AS id, CONCAT(nombres,' ',apellidos) AS title
			FROM usuario
			WHERE rol = 'ingeniero';
		");

		return $query->result();
	}

    //trae la contraseña del usuario en sesion
	public function get_pass_by_id($user){
		$query = $this->db->query("
				SELECT contrasena FROM users WHERE id_users = $user;
			");
		return $query->row();
	}
	public function m_Update_pass_or_email($user, $data){
		$this->db->where('id_users', $user);
		if($this->db->update('users', $data)){
			return 1;
		}
		else {
			return 0;
		}
    }
}
