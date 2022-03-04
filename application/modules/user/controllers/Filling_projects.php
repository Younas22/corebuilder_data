<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filling_projects extends MY_Controller {
 
 		
		
		function __construct()
	{
		parent:: __construct();
		$this->load->model('Filling_projects_M','filling_projects');
		if(empty($this->session->userdata('logged_in')))
		{
			return redirect(base_url() . 'signin');
		}else{

if (check_login_status($this->session->userdata('logged_in')->id) != $this->session->userdata('login_status')['login_status']) {
return redirect(base_url() . 'logout');}

$this->load->library('../modules/user/controllers/User_dashboard');
		}
// require_once(PHYSICAL_BASE_URL . 'system/application/modules/user/controllers/User_dashboard.php'); 
// dd(modules::run('module/User_dashboard/skip_added', 3232));



	} 

/*content-writing*/
	public function start_p_filling($p_title,$project_id,$user_id)
	{
		$check_dedline = $this->filling_projects->check_dedline($project_id);
		// dd($check_dedline);
		if ($check_dedline == 1) {
		$data['url'] = current_url();
		$data['url_title'] = $this->uri->segment(3);
		$data['title'] = 'Project View';
		$data['contant_view'] = 'user/start_content_filling';
	$data['get_content_writing'] = $this->filling_projects->get_content_writing($project_id);
	if ($this->uri->segment(3) != 'captcha') {
	$data['filling_projects'] = $this->filling_projects->get_random_filling_val($project_id);
	$data['project_type'] = active_font($project_id)[1];
	// dd($data['filling_projects']);
		}else{
			// dd(active_font($project_id)[0]);
		$this->load->helper('captcha');
		$config = array(
		'img_path'=>'./image_for_captcha/',
		'img_url'=> base_url('image_for_captcha'),
		'img_height'=> '80',
		'img_width' => '350',
		'font_path'=> FCPATH .'image_for_captcha/font/'.active_font($project_id)[0],
		'word_length'=> 10,
		'font_size'=> 150,
		// 'expiration' => 7200,
		'pool'=> 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqurstuvwxyz1234567890',
		'colors'=> array(
		'background' => array(255, 255, 204),
		    'border' => array(255, 0, 0),
		    'text' => array(204, 0, 204),
		    'grid' => array(0, 204, 0)
		)
		); 



		// 'colors'=> array(
		// 'background'=> array(225, 171, 91),
		//     'border' => array(255, 102, 153),
		//     'text' => array(110, 10, 110),
		//     'grid' => array(255, 102, 153)
		// )

		// 'colors'=> array(
		// 'background'=> array(225, 171, 91),
		//     'border' => array(110, 10, 10),
		//     'text' => array(110, 10, 110),
		//     'grid' => array(225, 171, 91)
		// )
		$data['project_type'] = active_font($project_id)[1];
		$captcha = create_captcha($config);
		$data['captcha_img'] = $captcha['image'];
		$data['captcha_word'] = $captcha['word'];
		}
		// dd($data['filling_projects']);
			$this->template->template($data);
		}else{
			redirect (base_url('user/end_project'));
		}

	}


/*content-writing*/
	public function submit_number_filling()
	{
		$User_dashboard = new User_dashboard();
		$p_id = $this->input->post('p_id');
		$User_dashboard->skip_added($p_id);
		$user_id = $this->session->userdata('logged_in')->id;
		$current_url = $this->input->post('current_url');
		$project_id = $this->input->post('id');
        $data = array(
            'num_box_one'=>$this->input->post('num_box_one'),
            'num_box_two'=>$this->input->post('num_box_two'),
            'num_box_three'=>$this->input->post('num_box_three'),
            'num_box_char'=>$this->input->post('num_box_char'),
            'num_box_panch'=>$this->input->post('num_box_panch'),
            'num_box_chay'=>$this->input->post('num_box_chay'),
            'num_box_sat'=>$this->input->post('num_box_sat'),
            'num_box_ath'=>$this->input->post('num_box_ath'),
            'num_box_no'=>$this->input->post('num_box_no'),
            'num_box_ten'=>$this->input->post('num_box_ten'),
            'difficulty'=>$this->input->post('numbers_tape')
        );

		$res = $this->filling_projects->submit_filling($project_id,$p_id,$data,$user_id);
		// dd($res);
		if ($res) {
		redirect($current_url);
		}
	}

	/*submit_form_filling*/
	public function submit_form_filling()
	{
		$User_dashboard = new User_dashboard();
		$p_id = $this->input->post('p_id');
		$User_dashboard->skip_added($p_id);
		$user_id = $this->session->userdata('logged_in')->id;
		$current_url = $this->input->post('current_url');
		$project_id = $this->input->post('id');
        $data = array(
            'form_val_one'=>$this->input->post('form_val_one'),
            'form_val_two'=>$this->input->post('form_val_two'),
            'form_val_three'=>$this->input->post('form_val_three'),
            'form_val_four'=>$this->input->post('form_val_four'),
            'form_val_panch'=>$this->input->post('form_val_panch'),
            'form_val_chay'=>$this->input->post('form_val_chay'),
            'form_val_sat'=>$this->input->post('form_val_sat'),
            'form_val_ath'=>$this->input->post('form_val_ath'),
            'form_val_no'=>$this->input->post('form_val_no'),
            'form_val_ten'=>$this->input->post('form_val_ten')
        );
		// dd($this->input->post());
		$res = $this->filling_projects->submit_filling($project_id,$p_id,$data,$user_id);
		// dd($res);
		if ($res) {
		redirect($current_url);
		}
	}

	/*submit_form_filling*/
	public function submit_invoice_filling()
	{
		$User_dashboard = new User_dashboard();
		$p_id = $this->input->post('p_id');
		$User_dashboard->skip_added($p_id);
		$user_id = $this->session->userdata('logged_in')->id;
		$current_url = $this->input->post('current_url');
		$project_id = $this->input->post('id');
        $data = $this->input->post('total_cost');
		$res = $this->filling_projects->submit_filling($project_id,$p_id,$data,$user_id);
		// dd($res);
		if ($res) {
		redirect($current_url);
		}
	}

	/*submit_form_filling*/
	public function submit_captcha_filling()
	{
		$User_dashboard = new User_dashboard();
		$p_id = $this->input->post('p_id');
		$User_dashboard->skip_added($p_id);

		$user_id = $this->session->userdata('logged_in')->id;
		$current_url = $this->input->post('current_url');
		$p_id = $this->input->post('p_id');

		$project_id = $this->input->post('id');
        $data = array('captcha_val'=>$this->input->post('captcha_val'));
		$res = $this->filling_projects->submit_filling($project_id,$p_id,$data,$user_id);
		if ($res) {
		redirect($current_url);
		}
	}
		/*Project end*/
	public function project_end($project_id)
	{
	$res = $this->db->where('id',$project_id)->update('u_projects',array('end_project'=>1));
		if ($res) {
		redirect($_SERVER['HTTP_REFERER']);
		}
	}




}