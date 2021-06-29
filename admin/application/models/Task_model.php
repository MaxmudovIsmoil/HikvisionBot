<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model
{
    public function __construct() {

        parent::__construct();
    
    }


    public function getTask() {

    	$this->db->select('t.id, t.name');
		$query = $this->db->get('task t');

		return $query->result_array();
	}



	public function getTaskOne($id)
	{
		$this->db->select('id, name');
		$this->db->where(array('id'=> $id));
		$query = $this->db->get('task');
		return $query->row_array();
	}

	public function add($post)
	{
		$id = $this->db->insert("task", $post);
		return $id;
	}

	public function update($id, $post)
	{
		$this->db->where("id", $id);
		$id = $this->db->update("task", $post);
		return $id;
	}

	public function delete($id)
	{
		$this->db->where(array('id' => $id));
		$id = $this->db->delete('task');
		return $id;
	}



}
