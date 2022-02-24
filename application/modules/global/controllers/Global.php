<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global extends MY_Controller {
  
	public function index()
	{
		// echo $company_id = $this->session->userdata('logged_in')->created_at;
		// exit();
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/dashboard';
		/*home email*/
		$data['letest_users'] = $this->company_dash->letest_users(6);
		// dd($data['letest_users']);
		$data['get_projects'] = $this->company_dash->get_projects();
		$this->template->template($data);
	}
}