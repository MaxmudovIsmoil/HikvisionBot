<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $data = array();
    public $layout;
     
    public function __construct()
    {
        parent::__construct();
        $this->layout   = 'layout/dashboard';
    }

}

class Admin_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

         if(!$this->session->userdata('username')) {
             redirect('user/login', 'refresh');
         }

    }

}







?>
