<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct() {

        parent::__construct();
    
    }

    public function login($username, $password) {

        $this->db->select("u.id, u.username");
        $this->db->where(array("u.username" => $username, "u.password" => $password, 'u.type' => 1));
        $query = $this->db->get("users u");

        return $query->row_array();
    }


    public function getUsers() {

    	$this->db->select('u.*');
    	$query = $this->db->get('users u');

		return $query->result_array();
	}

	public function getUserOne($id)
	{
		$this->db->select('u.*');
		$this->db->where(array('id'=> $id));
		$query = $this->db->get('users u');
		return $query->row_array();
	}

	public function add($post)
	{
		$id = $this->db->insert("users", $post);
		return $id;
	}

	public function update($id, $post)
	{
		$this->db->where("id", $id);
		$id = $this->db->update("users", $post);
		return $id;
	}

	public function delete($id)
	{
		$this->db->where(array('id' => $id));
		$id = $this->db->delete('users');
		return $id;
	}

	public function adminUpdate($username, $password)
	{
		$post = array('password' => $password);
		$this->db->where(array('username' => $username, 'type' => 1));
		$id = $this->db->update('users', $post);
		return $id;
	}

}
