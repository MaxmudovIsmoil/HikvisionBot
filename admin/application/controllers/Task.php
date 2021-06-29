<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('task_model');
    }

    public function index()
    {
        $this->data['title'] = "Vazifalar";

		$this->data['task'] = $this->task_model->getTask();

        $this->data['content'] = "task/index";
        $this->load->view($this->layout, $this->data);
    }

	public function add()
	{
		$this->data['title'] = "Hodim qo'shish";

		$this->form_validation->set_rules('name', "Nomi", 'trim|required');


		if ($this->form_validation->run() == TRUE)
		{
			if($this->task_model->add($this->input->post()))
				redirect("task/", "refresh");
		}
		else
			$this->data["validation_errors"] = $this->form_validation->error_array();

		$this->data['content'] = "task/add";
		$this->load->view($this->layout, $this->data);
    }

	public function edit($id)
	{
		$this->data['title'] = "Vazifani tahrirlash";

		$this->form_validation->set_rules('name', "Nomi", 'trim|required');

		if ($this->form_validation->run() == TRUE)
		{
			$post = array(
				'name' =>  $this->input->post('name'),
			);


			if($id = $this->task_model->update($this->input->post('id'), $post))
				redirect("task/", "refresh");
			else
				echo "Yangilashda xatolik";
		}
		else{
			$this->data["validation_errors"] = $this->form_validation->error_array();

			$task = $this->task_model->getTaskOne($id);
			$this->data['task'] = $task;
		}

		$this->data['content'] = "task/edit";
		$this->load->view($this->layout, $this->data);
	}

	public function delete($id)
	{
		$result = $this->task_model->delete($id);

		echo json_encode($result);
	}


}


