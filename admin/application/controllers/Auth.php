<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['title'] = "Barcha Hodimlar";

		$this->data['users'] = $this->user_model->getUsers();

        $this->data['content'] = "auth/index";
        $this->load->view($this->layout, $this->data);
    }

	public function add()
	{
		$this->data['title'] = "Hodim qo'shish";

		$this->form_validation->set_rules('lastname', "Faliliya", 'trim|required');
		$this->form_validation->set_rules('firstname', "ism", 'trim|required');
		$this->form_validation->set_rules('phone', "Telefon", 'trim|required');
		$this->form_validation->set_rules('job_title', "lavozim", 'trim|required');
		$this->form_validation->set_rules('born', "Tug'ilgan sanan", 'trim');
		$this->form_validation->set_rules('gander', "jins", 'trim');
		$this->form_validation->set_rules('address', "manzil", 'trim');

		if ($this->form_validation->run() == TRUE)
		{
			$post = array(
				'firstname' =>  $this->input->post('firstname'),
				'lastname'	=>  $this->input->post('lastname'),
				'phone'		=>  $this->input->post('phone'),
				'job_title'	=>  $this->input->post('job_title'),
				'gender'	=>  $this->input->post('gender'),
				'born'		=>  date('Y-m-d', strtotime($this->input->post('born'))),
				'address'	=>  $this->input->post('address'),
			);

			if($this->user_model->add($post))
				redirect("auth/", "refresh");
		}
		else
			$this->data["validation_errors"] = $this->form_validation->error_array();

		$this->data['content'] = "auth/add";
		$this->load->view($this->layout, $this->data);
    }

	public function edit($id = null)
	{
		$this->data['title'] = "Hodim Tahrirlash";
		
		$this->form_validation->set_rules('lastname', "Faliliya", 'trim|required');
		$this->form_validation->set_rules('firstname', "ism", 'trim|required');
		$this->form_validation->set_rules('phone', "Telefon", 'trim|required');
		$this->form_validation->set_rules('job_title', "lavozim", 'trim|required');
		$this->form_validation->set_rules('born', "Tug'ilgan sanan", 'trim');
		$this->form_validation->set_rules('gander', "jins", 'trim');
		$this->form_validation->set_rules('address', "manzil", 'trim');

		if ($this->form_validation->run() == TRUE)
		{
			$post = array(
				'firstname' =>  $this->input->post('firstname'),
				'lastname'	=>  $this->input->post('lastname'),
				'phone'		=>  $this->input->post('phone'),
				'job_title'	=>  $this->input->post('job_title'),
				'gender'	=>  $this->input->post('gender'),
				'born'		=>  date('Y-m-d', strtotime($this->input->post('born'))),
				'address'	=>  $this->input->post('address'),
			);

			if($id = $this->user_model->update($this->input->post('id'), $post))
				redirect("auth/", "refresh");
			else
				echo "Yangilashda xatolik";

		}
		else{
			$this->data["validation_errors"] = $this->form_validation->error_array();

			$user = $this->user_model->getUserOne($id);
			$this->data['user'] = $user;
			$this->data['user']['born'] = date('d.m.Y', strtotime($user['born']));
		}

		$this->data['content'] = "auth/edit";
		$this->load->view($this->layout, $this->data);
	}


	public function delete($id)
	{
		$result = $this->user_model->delete($id);

		echo json_encode($result);
	}

	public function admin_edit()
	{
		$this->data['title'] = "Admin tahrirlash";

		$this->data['login'] = $this->session->userdata('username');

		$this->form_validation->set_rules('password', "Parol", 'trim|required');

		if ($this->form_validation->run() === true) {

			if ($this->user_model->adminUpdate($this->session->userdata('username'), $this->input->post('password')))
				redirect("auth/", "refresh");
		}

		$this->data['content'] = 'auth/admin_edit';
		$this->load->view($this->layout, $this->data);
	}
}


