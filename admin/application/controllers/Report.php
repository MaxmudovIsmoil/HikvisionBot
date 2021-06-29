<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('report_model');
    }

    public function index()
    {
        $this->data['title'] = "Hisibotlar";

		$hodimlar = $this->report_model->getHodimlar();
		$this->data['hodimlar'] = $hodimlar;


		$this->form_validation->set_rules('user_id', "Hodim", 'trim|required');
		$this->form_validation->set_rules('startDay_endDay', "Oraliq san", 'trim|required');


		if ($this->form_validation->run() == TRUE)
		{
			$user_id = $this->input->post('user_id');
			$days = $this->input->post('startDay_endDay');
			$daysArr = explode(' - ', $days);
			$start_day = date('Y-m-d', strtotime($daysArr[0]));
			$end_day = date('Y-m-d', strtotime($daysArr[1]));
			$this->data['startDay_endDay'] = $days;

			foreach($hodimlar as $k => $h) {
				if ($h['id'] == $user_id)
					$name = $h['lastname']." ".$h['firstname'];
			}
			$this->data['name'] = $name;

			$report = $this->report_model->getReport($user_id, $start_day, $end_day);
			$this->data['report'] = $report;

			$done = 0;
			$unfulfilled = 0;
			$unpublished = 0;
			foreach($report as $k => $r) {
				if ($r['status']  == 1)
					$done++;
				else if($r['status'] == 0 && $r['confirmation_time'] != '')
					$unfulfilled++;
				else if($r['status'] == 0 && $r['confirmation_time'] == '')
					$unpublished++;
			}
			$this->data['done'] = $done;
			$this->data['unfulfilled'] = $unfulfilled;
			$this->data['unpublished'] = $unpublished;
			
		}

        $this->data['content'] = "report/index";
        $this->load->view($this->layout, $this->data);
    }


}


