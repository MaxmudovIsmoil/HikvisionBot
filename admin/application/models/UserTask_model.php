<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserTask_model extends CI_Model
{
    public function __construct() {

        parent::__construct();
    
    }

    public function getUserTask($id, $startDay = null, $endDay = null) {

    	$this->db->select('u.id as user_id, u.firstname, u.lastname, u.job_title, t.id as task_id, t.name, ut.id as ut_id, ut.remind_time, ut.start_day, ut.end_day');
    	$this->db->join('users u', 'u.id = ut.user_id');
    	$this->db->join('task t', 't.id = ut.task_id');
		$this->db->where(array('ut.user_id' => $id));
		$query = $this->db->get('user_task ut');

		return $query->result_array();
	}

	public function getUserTaskOne($id) {
    	$this->db->select('*');
    	$this->db->where(array('id'=> $id));
    	$res = $this->db->get('user_task');

    	return $res->row_array();
	}

	public function add($post)
	{
		$id = $this->db->insert("user_task", $post);
		return $id;
	}

	public function update($id, $remind_time)
	{
		$post = array('remind_time' => $remind_time);
		$this->db->where("id", $id);
		$id = $this->db->update("user_task", $post);
		return $id;
	}

	public function delete($id)
	{
		$this->db->where(array('id' => $id));
		$id = $this->db->delete('user_task');
		return $id;
	}


}
