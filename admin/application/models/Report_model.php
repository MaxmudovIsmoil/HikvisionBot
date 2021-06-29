<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model
{
    public function __construct() {

        parent::__construct();
    
    }


    public function getReport($user_id, $start_day, $end_day) {

		$query = $this->db->query("SELECT td.id as task_done_id, td.status, td.confirmation_time,
						t.id as task_id, t.name,
						ut.id as user_task_id, ut.user_id, ut.remind_time, ut.start_day, ut.end_day
						FROM task_done td
						LEFT JOIN task t ON t.id = td.task_id
						LEFT JOIN user_task ut ON ut.user_id = td.user_id
						WHERE td.user_id = ". $user_id ." 
						AND '". $start_day ."' >= ut.start_day 
						AND '". $end_day ."' <= ut.end_day
						GROUP BY td.id");

		return $query->result_array();
	}

	public function getHodimlar()
	{
		$this->db->select('u.*');
		$query = $this->db->get('users u');
		return $query->result_array();
	}


//	public function getTaskOne($id)
//	{
//		$this->db->select('id, name');
//		$this->db->where(array('id'=> $id));
//		$query = $this->db->get('task');
//		return $query->row_array();
//	}
//
//
//
//	public function add($post)
//	{
//		$id = $this->db->insert("task", $post);
//		return $id;
//	}
//
//	public function update($id, $post)
//	{
//		$this->db->where("id", $id);
//		$id = $this->db->update("task", $post);
//		return $id;
//	}
//
//	public function delete($id)
//	{
//		$this->db->where(array('id' => $id));
//		$id = $this->db->delete('task');
//		return $id;
//	}



}
