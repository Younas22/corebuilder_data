<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_tool extends MY_Controller {
    
  
		function __construct()
	{
		parent:: __construct();
		$this->load->model('Email_tool_M','Email_tool');
		if(empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url() . 'signin');
		}else{

if (check_login_status($this->session->userdata('logged_in')->id) == 0) {
return redirect(base_url() . 'logout');}

		}
	} 

  
	public function index()
	{
		// echo $company_id = $this->session->userdata('logged_in')->created_at;
		// exit();
		// dd('dashboard');
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-dashboard';
		/*home email*/
		// $data['letest_users'] = $this->company_dash->letest_users(6);
		// dd($data['letest_users']);
		$this->template->template($data);
	}


  
	public function email()
	{
		// echo $company_id = $this->session->userdata('logged_in')->created_at;
		// exit();
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-tool';
		/*home email*/
		// $data['letest_users'] = $this->company_dash->letest_users(6);
		// dd($data['letest_users']);
		$this->template->template($data);
	}


  
	public function template()
	{
		// echo $company_id = $this->session->userdata('logged_in')->created_at;
		// exit();
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-template';
		/*home email*/
		// $data['letest_users'] = $this->company_dash->letest_users(6);
		// dd($data['letest_users']);
		$this->template->template($data);
	}


  
	public function setting()
	{
		// echo $company_id = $this->session->userdata('logged_in')->created_at;
		// exit();
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-setting';
		/*home email*/
		// $data['letest_users'] = $this->company_dash->letest_users(6);
		// dd($data['letest_users']);
		$this->template->template($data);
	}
  
	public function create_compaign()
	{
		// echo $company_id = $this->session->userdata('logged_in')->created_at;
		// exit();
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/create_compaign';
		/*home email*/
		// $data['letest_users'] = $this->company_dash->letest_users(6);
		// dd($data['letest_users']);
		$this->template->template($data);
	}
}