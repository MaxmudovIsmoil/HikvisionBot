<?php 

class User extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login() {

        $this->data['title'] = 'Login';

        // validate form input
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() === TRUE) {

                $username = htmlspecialchars(addslashes($this->input->post('username')));
                $password = $this->input->post('password');


                if ($this->user_model->login($username, $password))
                {
                    $newdata = array(
                        'username'  => $this->input->post('username'),
                        'user_id'   => $this->user_model->login($username, $password)['id'],
                        'logged_in' => TRUE
                    );


                    $this->session->set_userdata($newdata);

                    $this->session->set_flashdata('message', "login successful");
                    redirect('auth/', 'refresh');

                }
                else
                {
                    $this->session->set_flashdata('message', "Login yoki parol xato");
                    redirect('user/login', 'refresh');
                }

        }
        else {

            $this->load->view('login');
        }

    }

    /**
     * Log the user out
     */
    public function logout()
    {
        $this->data['title'] = "Tizimdan chiqish";

        $this->session->sess_destroy();

        // redirect them to the login page
        redirect('user/login', 'refresh');
    }
}


