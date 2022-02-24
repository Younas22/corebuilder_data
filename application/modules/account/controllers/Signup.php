<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends MY_Controller {


		function __construct()
	{
		parent:: __construct();
	}
	

	public function index()
	{

		$data['url'] = current_url();
		$data['url_title'] = 'sign up';
		$data['title'] = 'create your account';
		$data['contant_header'] = 'account/contant_header';
		$data['contant_view'] = 'account/signup';
		$this->template->template($data);
	}

	
}
