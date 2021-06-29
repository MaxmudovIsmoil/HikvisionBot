<?php defined('BASEPATH') OR exit('No direct script access allowed');

class UserTask extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('UserTask_model', 'task_model', 'user_model'));
	}

	public function index($id)
	{
		$user = $this->user_model->getUserOne($id);

		if (isset($_POST['save'])) {
			$days 		= $this->input->post('startDay_endDay');
			$start_day 	= explode(' - ', $days)[0];
			$end_day 	= explode(' - ', $days)[1];
		}


		$id = isset($_POST['id']) ? $this->input->post('id') : $id;

		$task = $this->UserTask_model->getUserTask($id);
		$this->data['id'] = $id;
		$this->data['title'] = isset($user) ? ($user['lastname']." ".$user['firstname']." ".$user['job_title']) : "";

		$this->data['all_task'] = $this->task_model->getTask();

		if ($task) {

			$this->data['start_day'] = date('d.m.Y', strtotime($task[0]['start_day']));
			$this->data['end_day'] = date('d.m.Y', strtotime($task[0]['end_day']));


			$taskName = array();
			foreach ($task as $k => $t) {
				$taskName[$t['task_id']] = $t['name'];
			}
			$this->data['task'] = $taskName;


			// task-related times  key t_id value array(remind_time)
			$taskRemindTime = array();
			foreach($task as $k => $t) {
				$taskRemindTime[$t['task_id']][$t['ut_id']] = $t['remind_time'];
			}
			$this->data['remind_time'] = $taskRemindTime;

		} // if



		$this->data['content'] = "UserTask/index";
		$this->load->view($this->layout, $this->data);
	}

	public function add($user_id = null)
	{
		$this->data['title'] = "Hodim qo'shish";

		$this->form_validation->set_rules('task_id', "TaskId", 'trim|required');
		$this->form_validation->set_rules('startDay_endDay', "startDay_endDay", 'trim|required');
		$this->form_validation->set_rules('remind_time1', "Remind time", 'trim|required');

		$user_id = $this->input->post('user_id');

		echo $user_id;

		if ($this->form_validation->run() == TRUE)
		{
			$days = $this->input->post('startDay_endDay');

			$res = '';
			$n = count($this->input->post())-3;
			for ($i = 1; $i <= $n; $i++) {
				$post = array(
					'user_id'	=> $this->input->post('user_id'),
					'task_id'	=> $this->input->post('task_id'),
					'remind_time' => $this->input->post('remind_time'.$i),
					'start_day' => explode(' - ', $days)[0],
					'end_day' 	=> explode(' - ', $days)[1],
				);
				$res = $this->UserTask_model->add($post);
			}

			if($res)
				redirect('UserTask/index/'.$user_id);
		}
		else
			$this->data["validation_errors"] = $this->form_validation->error_array();

		$this->data['content'] = "userTask/index/".$user_id;
		$this->load->view($this->layout, $this->data);
	}

	public function ajax_remove_time()
	{
		$post = $this->input->post();
		$res = $this->UserTask_model->delete($post['id']);

		if ($res)
			echo json_encode('ok');
		else
			echo json_encode('no');

	}

	public function ajax_edit_insert()
	{
		$post = $this->input->post();


		if (isset($post['edit']))
		{
			foreach	($post['edit'] as $edit) {

				$u = $this->UserTask_model->update($edit['user_task_id'], $edit['remind_time']);
			}
		}

		if(isset($post['add']))
		{
			foreach($post['add'] as $add){

				$data = array(
					'user_id' => $add['user_id'],
					'task_id' => $add['task_id'],
					'remind_time' => $add['remind_time'],
					'start_day' => $add['start_day'],
					'end_day' => $add['end_day'],
				);

				$e = $this->UserTask_model->add($data);
			}
		}

		if ($u || $e)
			echo json_encode(true);
		else
			echo json_encode(false);

	}


	public function ajax_delete()
	{
		echo json_encode('1111');
	}
}
