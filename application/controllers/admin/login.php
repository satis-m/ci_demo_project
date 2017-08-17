<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['message'] = 'hello world';
		$data['main_content'] = 'login';
		$this->load->view('admin/template',$data);
	}
}
