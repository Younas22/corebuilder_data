<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typing_projects extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		$this->load->model('Typing_projects_M','content_writing');
		if(empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url() . 'signin');
		}else{

if (check_login_status($this->session->userdata('logged_in')->id) != $this->session->userdata('login_status')['login_status']) {
return redirect(base_url() . 'logout');}
$this->load->library('../modules/user/controllers/User_dashboard');
		}
	} 
	

/*content-writing*/
	public function start_p_content_writing($p_title,$project_id,$user_id)
	{
		
		$check_dedline = $this->content_writing->check_dedline($project_id);
		// dd($check_dedline);
		if ($check_dedline == 1) {
		$data['url'] = current_url();
		$data['url_title'] = $this->uri->segment(3);
		$data['title'] = 'Project View';
		$data['contant_view'] = 'user/start_content_writing';
		// dd();
	$data['get_content_writing'] = $this->content_writing->get_content_writing($project_id);

		/*project is target or non target*/
		$get_image_quantity = $this->content_writing->get_image_quantity($project_id);
		if ($get_image_quantity > 0) {
		$data['get_up_data'] = $this->content_writing->get_up_data($project_id);
		$data['get_image_quantity'] = $this->content_writing->get_image_quantity($project_id);
		$data['get_img_quantity'] = $this->content_writing->get_img_quantity($project_id);
		}else{
		$data['get_up_data'] = $this->content_writing->get_random_contant_img($project_id);
		}
			$this->template->template($data);
		}else{
			redirect (base_url('user/end_project'));
		}
		// dd($this->uri->segment(3));
		// dd($data['project_view']);

	}


/*content-writing*/
	public function submit_content_writing()
	{
		// $User_dashboard = new User_dashboard();
		$p_id = $this->input->post('p_id');
		// $User_dashboard->skip_added($p_id);
		$user_id = $this->session->userdata('logged_in')->id;
		$up_data_id = $this->input->post('up_data_id');
		$current_url = $this->input->post('current_url');
		$filling_val = $this->input->post('filling_val');
		$actual_val = $this->input->post('text_value');

		$this->content_writing->submit_content_writing($p_id,$up_data_id,$filling_val,$actual_val,$user_id);
		$check_dedline = $this->content_writing->check_dedline($p_id);
		if ($check_dedline == 1) {
		redirect($current_url);
		}else{
			redirect (base_url('user/end_project'));
		}

	}
}