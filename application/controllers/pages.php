<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function about()
	{
		$data['message'] = 'hello world';
		$data['main_content'] = 'about';
		$this->load->view('template',$data);
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */