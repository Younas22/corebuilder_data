<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends MY_Controller {
 

	function __construct()
	{
		parent:: __construct();
		$this->load->model('User_dashboard_M','user_dash');
		if(empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url() . 'signin');
		}else{

if (check_login_status($this->session->userdata('logged_in')->id) != $this->session->userdata('login_status')['login_status']) {
return redirect(base_url() . 'logout');}

		}
	} 
	

public function index()
{
	$user_id = $this->session->userdata('logged_in')->id;
	$data['url'] = current_url();
	$data['url_title'] = 'sign in';
	$data['title'] = 'sign in your account';
	$data['contant_view'] = 'admin/dashboard';
	$data['get_all_projects'] = $this->user_dash->get_projects();
	$data['profile'] = $this->user_dash->profile($user_id);
	// dd($data['get_projects']);
	$this->template->template($data);
}


	public function profile()
	{
		$user_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/profile';
		$data['action_type'] = base_url('user/update/profile');
		$data['profile'] = $this->user_dash->profile($user_id);
		// dd($data['profile']);
		$data['user_total_projects'] = $this->user_dash->user_total_projects($user_id);
		$data['user_earning'] = $this->user_dash->user_earning($user_id);
		$this->template->template($data);
	}


	/*update profile*/ 
	public function update_profile()
	{
		$user_id = $this->session->userdata('logged_in')->id;
		if (!empty($_FILES['profile_img']['name'])) {
        $config['upload_path'] = './assets/img/profile';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 102400;
        $profile_img = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', 
    	$_FILES['profile_img']['name']);

	if($_FILES['profile_img']['size']>102400)
	{
	$this->session->set_flashdata('profile', 'Logo size Max 100kb is allowed');
    	redirect('user/profile');
	}

    	$config['file_name'] = $profile_img;
        $this->load->library('upload', $config);
        $this->upload->do_upload('profile_img');
    	}else{$profile_img = $this->input->post('old_profile_img');}
    	$profile_data =  [
    		'first_name'=>$this->input->post('first_name'),
    		'last_name'=>$this->input->post('last_name'),
    		'user_phone'=>$this->input->post('user_phone'),
    		'password'=>sha1($this->input->post('password')),
    		'decript_password'=>  $this->input->post('password'),
    		'profile_img'=>$profile_img
    	];

        $this->db->where('id',$user_id);
        $updated = $this->db->update('users',$profile_data);
        if ($updated) {
        	$this->session->set_flashdata('profile', 'changes saved');
        	redirect('user/profile');
        }
	}


/*user_projects view*/
public function user_projects($user_id)
	{
        $config = array();
$config["base_url"] = base_url() . "user/User_dashboard/user_projects/".$user_id;
$config["total_rows"] = $this->user_dash->user_projects($user_id);
        $config["per_page"] = 10;
        $config["uri_segment"] = 5;
        $config['full_tag_open'] = "<ul class='pagination'>";
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['prev_link'] = 'Previous Page';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = 'Next Page';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['alluser_projects'] = $this->user_dash->alluser_projects($config["per_page"], 
        	$page,$user_id);
        // dd($data['alluser_projects']);
		$data['url'] = current_url();
		$data['url_title'] = 'User-Project';
		$data['title'] = 'User Project';
		$data['contant_view'] = 'company/user_projects';
		$this->template->template($data);
	}
/*end user_projects view*/

	public function user_project_details($p_title,$p_id)
	{
		$user_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Project View';
		$data['title'] = 'Project View';
		$data['contant_view'] = 'company/project_view';
		$data['project_view'] = $this->user_dash->project_view($p_id);
		// dd($data['project_view']);
		$data['profile'] = $this->user_dash->profile($user_id);
		$data['custom_terms'] = $this->user_dash->profile($user_id)[1]->custom_terms;
		$this->template->template($data);
	}



	public function end_project()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'Project End';
		$data['title'] = 'Project End';
		$data['contant_view'] = 'user/end_project';
		// dd($data['project_view']);
		$this->template->template($data);
	}


	public function accep_terms_()
	{
		// dd($this->input->post());
		$this->session->unset_userdata('accep_terms');
    	$project_title = $this->input->post('project_name');
    	$pid = $this->input->post('project_id');
// 
		if ($this->input->post('terms_conditions_status')) {
        $config['upload_path'] = './assets/img/term_conditions';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 51200;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $data['fname'] = $this->input->post('fname');
        $data['date_of_birth'] = $this->input->post('date_of_birth');
        $data['aadhar_number'] = $this->input->post('aadhar_number');
        $data['pan_card'] = $this->input->post('pan_card');
        $data['bank_name'] = $this->input->post('bank_name');
        $data['account_no'] = $this->input->post('account_no');
        $data['IFSC_code'] = $this->input->post('IFSC_code');
        $data['terms_conditions_status'] = 2;

	// if($_FILES['img_one']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	// if($_FILES['img_two']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	// if($_FILES['img_three']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	// if($_FILES['img_four']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	if (!$this->upload->do_upload('img_one')) {
		$this->session->set_flashdata('accep_terms_error', 'Please add Aadhar Card Front Image');
		$url = 'user/user-project-details/'.$project_title.'/'.$pid;
		redirect($url);
	} else {
		$fileData = $this->upload->data();
		$data['img_one'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}

	if (!$this->upload->do_upload('img_two')) {
		$this->session->set_flashdata('accep_terms_error', 'Please add Aadhar Card Back Image');
		$url = 'user/user-project-details/'.$project_title.'/'.$pid;
		redirect($url);
	} else {
		$fileData = $this->upload->data();
		$data['img_two'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}

	if (!$this->upload->do_upload('img_three')) {
		$this->session->set_flashdata('accep_terms_error', 'Please add Pan Card Image');
		$url = 'user/user-project-details/'.$project_title.'/'.$pid;
		redirect($url);
	} else {
		$fileData = $this->upload->data();
		$data['img_three'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}


	if ($this->upload->do_upload('img_four')) {
		$fileData = $this->upload->data();
		$data['img_four'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}


	// print_r($data); die;

        $this->db->where('id',$pid);
        $accep_terms = $this->db->update('u_projects',$data);
        // $accep_terms = '1';
	if ($accep_terms){
		$this->session->unset_userdata('accep_terms_error');
	$this->session->set_flashdata('accep_terms', 'Accepted Terms and Conditions, Now you can start Work');
	$url = 'user/user-project-details/'.$project_title.'/'.$pid;
	redirect($url);
	}

	}else{
		$this->session->set_flashdata('accep_terms_error', 'Please accept Terms and Conditions');
		$url = 'user/user-project-details/'.$project_title.'/'.$pid;
		redirect($url);
		}

	}


	public function accep_terms()
	{
		$this->session->unset_userdata('accep_terms');
    	$project_title = $this->input->post('project_name');
    	$pid = $this->input->post('project_id');

		if ($this->input->post('terms_conditions_status')) {
        $config['upload_path'] = './assets/img/term_conditions';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 51200;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $data['terms_conditions_status'] = 1;

	// if($_FILES['img_one']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	// if($_FILES['img_two']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	// if($_FILES['img_three']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	// if($_FILES['img_four']['size']>51200)
	// {
	// $this->session->set_flashdata('accep_terms_error', 'Max 50kb file is allowed for image.');
	// $url = 'user/user-project-details/'.$project_title.'/'.$pid;
	// redirect($url);
	// }

	if (!$this->upload->do_upload('img_one')) {
		$this->session->set_flashdata('accep_terms_error', 'Please add img1');
		$url = 'user/user-project-details/'.$project_title.'/'.$pid;
		redirect($url);
	} else {
		$fileData = $this->upload->data();
		$data['img_one'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}

	if (!$this->upload->do_upload('img_two')) {
		$this->session->set_flashdata('accep_terms_error', 'Please add img2');
		$url = 'user/user-project-details/'.$project_title.'/'.$pid;
		redirect($url);
	} else {
		$fileData = $this->upload->data();
		$data['img_two'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}

	if ($this->upload->do_upload('img_three')) {
		$fileData = $this->upload->data();
		$data['img_three'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}

	if ($this->upload->do_upload('img_four')) {
		$fileData = $this->upload->data();
		$data['img_four'] = $fileData['file_name'];
		$this->resize($fileData['file_name']);
	}


	// print_r($data); die;

        $this->db->where('id',$pid);
        $accep_terms = $this->db->update('u_projects',$data);
        // $accep_terms = '1';
	if ($accep_terms){
		$this->session->unset_userdata('accep_terms_error');
	$this->session->set_flashdata('accep_terms', 'Accepted Terms and Conditions, Now you can start Work');
	$url = 'user/user-project-details/'.$project_title.'/'.$pid;
	redirect($url);
	}

	}else{
		$this->session->set_flashdata('accep_terms_error', 'Please accept Terms and Conditions');
		$url = 'user/user-project-details/'.$project_title.'/'.$pid;
		redirect($url);
		}

	}


    public function resize($filename)
    {
    	// dd( $_SERVER['DOCUMENT_ROOT']);
		$sourcePath = './assets/img/term_conditions/'.$filename;
		$targetPath = './assets/img/term_conditions/';
		$configVar = array(
			'image_library' => 'gd2',
			'source_image' => $sourcePath,
			'new_image' => $targetPath,
			'maintain_ratio' => TRUE,
			'width'         =>  300,
			'height'        =>  300,
			'quality'       =>  "50%"
		);

		$this->load->library('image_lib');
		$this->image_lib->initialize($configVar);
		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors();
		}

		$this->image_lib->clear();
		return 1;
    }

	public function withdraw_request($p_id,$up_id)
	{
		$data['url'] = current_url();
		$data['url_title'] = 'Withdraw Request';
		$data['title'] = 'Withdraw Request';
		$data['wallet_amount'] = $this->user_dash->wallet_balance($p_id);
		$data['action_type'] = base_url('user/submit_withdraw_request');
		$data['contant_view'] = 'user/withdraw_request';
		// dd($data['project_view']);
		$this->template->template($data);
	}

	public function submit_withdraw_request()
	{
		// dd($this->input->post());
		$url = $this->input->post('current_url');
		$data['url'] = current_url();
		$data['url_title'] = 'Withdraw Request';
		$data['title'] = 'Withdraw Request';
		$data['contant_view'] = 'user/withdraw_request';
		// dd($data['project_view']);

		$withdraw_amount = $this->input->post('withdraw_amount');
		$ff =  ltrim($withdraw_amount, "0");
		$intraqam = (int)$ff;
		$arr = str_split($intraqam);
		$ss = array_slice($arr, -2, 1);
		$first = array_values($arr)[0];
		$second_last = $ss[0];
		$last = end($arr);
		$string = substr($intraqam, 0, -2);
		$amount_request = $string.'00';

		$data = array(
			'up_id'=>$this->input->post('u_project_id'),
			'p_id'=>$this->input->post('project_id'),
			'total_withdraw'=>$amount_request,
			'u_id'=>$this->session->userdata('logged_in')->id,
		);

		// dd($amount_request);

		$submit_withdraw_request = $this->user_dash->submit_withdraw_request($data);
		if ($submit_withdraw_request == 1) {
			// dd($submit_withdraw_request);
			unset($_SESSION['withdraw_errors']);
			$this->session->set_flashdata('withdraw_msg', 'Successfully request sent! your request was Rs' .$withdraw_amount .' but for policy purpose withdrawal request sent for Rs' .$amount_request);
		}else{
			// dd($submit_withdraw_request);
			unset($_SESSION['withdraw_msg']);
		        $this->session->set_flashdata('withdraw_errors',$submit_withdraw_request);
		}
		redirect($url);
	}


	public function all_withdraw($user_id)
	{
	$config = array();
	$config["base_url"] = base_url() . "user/User_dashboard/all_withdraw/".$user_id;
	$config["total_rows"] = $this->user_dash->user_withdraw($user_id);
	$config["per_page"] = 10;
	$config["uri_segment"] = 5;
	$config['full_tag_open'] = "<ul class='pagination'>";
	$config['full_tag_close'] = '</ul>';
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li class="active"><a href="#">';
	$config['cur_tag_close'] = '</a></li>';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['first_tag_open'] = '<li>';
	$config['first_tag_close'] = '</li>';
	$config['last_tag_open'] = '<li>';
	$config['last_tag_close'] = '</li>';
	$config['prev_link'] = 'Previous Page';
	$config['prev_tag_open'] = '<li>';
	$config['prev_tag_close'] = '</li>';
	$config['next_link'] = 'Next Page';
	$config['next_tag_open'] = '<li>';
	$config['next_tag_close'] = '</li>';
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['allwithdrawal'] = $this->user_dash->alluser_withdraw($config["per_page"], 
	$page,$user_id);
	// dd($data['allwithdrawal']);
	$data['url'] = current_url();
	$data['url_title'] = 'User-Project';
	$data['title'] = 'User Project';
	$data['contant_view'] = 'user/all_withdraw_request';
	$this->template->template($data);
	}

	public function get_skip($project_id)
	{
		$redirect_url = $this->input->post('redirect_url');
		$project_id = $this->input->post('project_id');
		// echo "string"; exit();
		// dd($redirect_url); 
		$return =  $this->db->where('id',$project_id)->get('u_working')->row();
		// add skip after 24 hours
		$this->skip_added($project_id);
	        $this->db->set('refrash_limit','refrash_limit-'.(int)1, FALSE);
	        $this->db->where('id', $project_id);
	        $res = $this->db->update('u_working');
	        if($res){
	            
	                if ($return->refrash_limit < 0 ) {
	                    $this->db->set('earning','earning-'.(int)1, FALSE);
	                    $this->db->set('refrash_fine','refrash_fine+'.(int)1, FALSE);
	                    $this->db->where('id', $project_id);
	                    $this->db->update('u_working');
		$this->session->set_flashdata('get_skip','After consuming 20 skips Rs.1 will be deducted from your wallet.');
		echo json_encode(array('url'=>$redirect_url));
	                }else{
		$this->session->set_flashdata('get_skip','After consuming 20 skips Rs.1 will be deducted from your wallet.');
		echo json_encode(array('url'=>$redirect_url));
	                }
	        }else{
	            return FALSE;
	        }
	}

	public function get_skip_($project_id,$up_data_id)
	{
		
		$return =  $this->db->where('id',$project_id)->get('u_working')->row();
	        $data = array('up_status'=>0);
	        $this->db->where('id', $up_data_id);
	        $this->db->update('up_data',$data);

		// add skip after 24 hours
		$this->skip_added($project_id);
	        $this->db->set('refrash_limit','refrash_limit-'.(int)1, FALSE);
	        $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
	        $this->db->where('id', $project_id);
	        $res = $this->db->update('u_working');
	        if($res){
	            
	                if ($return->refrash_limit < 0 ) {
	                    $this->db->set('earning','earning-'.(int)1, FALSE);
	                    $this->db->set('refrash_fine','refrash_fine+'.(int)1, FALSE);
	                    $this->db->where('id', $project_id);
	                    $this->db->update('u_working');
		$this->session->set_flashdata('get_skip','After consuming 20 skips Rs.1 will be deducted from your wallet.');
		redirect($_SERVER['HTTP_REFERER']);
	                }else{
		$this->session->set_flashdata('get_skip','After consuming 20 skips Rs.1 will be deducted from your wallet.');
		redirect($_SERVER['HTTP_REFERER']);
	                }
	        }else{
	            return FALSE;
	        }
	}

	public function skip_added($project_id)
	{
		$return =  $this->db->where('id',$project_id)->get('u_working')->row();
		if (empty($return->skip_date)) {
	    	    $this->db->set('skip_date',date('Y-m-d'));
	    	    $this->db->set('refrash_limit',20);
	            $this->db->where('id', $project_id);
	            $this->db->update('u_working');
		}else{
			if (date('Y-m-d') > $return->skip_date) {
	            	    $this->db->set('skip_date',date('Y-m-d'));
	            	    $this->db->set('refrash_limit',20);
	                    $this->db->where('id', $project_id);
	                    $this->db->update('u_working');
			}
		}
	}
	
}
