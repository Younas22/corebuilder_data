<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_dashboard extends MY_Controller {
    
  
		function __construct()
	{
		parent:: __construct();
		$this->load->model('Company_dashboard_M','company_dash');
		if(empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url() . 'company-login');
		}else{

if (check_login_status($this->session->userdata('logged_in')->id) == 0) {
return redirect(base_url() . 'logout/company');}

		}
	} 

  
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
		// dd($data['get_projects']);
		$this->template->template($data);
	}

	public function profile()
	{

		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/profile';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	/*update profile*/
	public function update_profile()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		if (!empty($_FILES['company_logo']['name'])) {
        $config['upload_path'] = './assets/img/profile';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 102400;
        $company_logo = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', 
    	$_FILES['company_logo']['name']);
	if($_FILES['company_logo']['size']>102400)
	{
		$this->session->set_flashdata('profile', 'Logo size Max 100kb is allowed');
    	redirect('company/profile');
	}
	    $config['file_name'] = $company_logo; 
        $this->load->library('upload', $config);
        $this->upload->do_upload('company_logo');
    	}else{$company_logo = $this->input->post('old_company_logo');}
    	if ($this->input->post('terms_status')) {
    	$terms_status = 1;}else{$terms_status = 0;}
    	$profile_data =  [
    		// 'company_name'=>$this->input->post('company_name'),
    		// 'manager_name'=>$this->input->post('manager_name'),
    		// 'user_phone'=>$this->input->post('user_phone'),
    		'password'=>sha1($this->input->post('decript_password')),
    		'decript_password'=>$this->input->post('decript_password'),
    		'company_website'=>$this->input->post('company_website'),
    		'configure_mail'=>$this->input->post('configure_mail'),
    		'configure_mail_pass'=>$this->input->post('configure_mail_pass'),
    		'theme'=>$this->input->post('theme'),
    		'street'=>$this->input->post('street'),
    		'official_address'=>$this->input->post('official_address'),
    		'locality'=>$this->input->post('locality'),
    		'landmark'=>$this->input->post('landmark'),
    		'city'=>$this->input->post('city'),
    		'referred_by'=>$this->input->post('referred_by'),
    		'referral_code'=>$this->input->post('referral_code'),
    		'state'=>$this->input->post('state'),
    		'pincode'=>$this->input->post('pincode'),
    		'country'=>$this->input->post('country'),
    		'whatsapp_no'=>$this->input->post('whatsapp_no'),
    		'source_get_to_know'=>$this->input->post('source_get_to_know'),
    		'company_logo'=>$company_logo,
    		// 'terms_status'=>$terms_status
    	];

        $this->db->where('id',$company_id);
        $updated = $this->db->update('users',$profile_data);
        if ($updated) {
			$this->session->set_flashdata('profile', 'changes saved');
        	redirect('company/profile');
        }

	}



/*add_user*/
	public function add_user()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'add-user';
		$data['title'] = 'Add User';
		$data['contant_view'] = 'company/add_user';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	public function submit_user()
	{
        // $this->form_validation->set_rules('user_phone', 'Phone', 'required');
        // $this->form_validation->set_message('is_unique', 'Email already exists.');
        // $this->form_validation->set_rules('company_email', 'Email', 'required|valid_email|is_unique[users.company_email]');
 
      	// if ($this->form_validation->run() == FALSE) {
		$company_id = $this->session->userdata('logged_in')->id;
		$check_data = $this->db->where('company_email',$this->input->post('company_email'))->where('company_id',$company_id)->get('users')->row();
		$company_id = $check_data->company_id;
		$validation = '';
		if ($this->session->userdata('logged_in')->id == $company_id) {
			$validation = FALSE;
		}else{
			$validation = TRUE;
		}
		if ($validation == FALSE) {
		$this->session->set_flashdata('is_unique', 'this data already exists');
		$data['url'] = current_url();
		$data['url_title'] = 'add-user';
		$data['title'] = 'Add User';
		$data['contant_view'] = 'company/add_user';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
        } else {
        	$password = pass_generate();
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company_id' => $this->input->post('company_id'),
                'company_email' => $this->input->post('company_email'),
                'user_phone' => $this->input->post('user_phone'),
                'password' => sha1($password),
                'decript_password' => $password,
                'theme' => 'blue',
                'user_type' => 'user'
            ];

            $user_id = $this->company_dash->submit_user($data);
            if ($user_id) {
if (base_url() == 'http://localhost/corebuilder_data/') {
	        $this->load->library('email');
	        $this->email->from('abc@gmail.com', 'alphaexposofts');
	        $this->email->to('xyz@gmail.com');
	        $this->email->subject('Login details');
	        $msg = $this->load->view('company/mail/login_details',$data,true);
	        $this->email->message($msg);
			if($this->email->send()){ redirect('Yes'); } else{ redirect('No');}
			$this->session->set_flashdata('msg', 'Successfully Register');
	        redirect(base_url().'company/add-project/'.$user_id);

}else{
            $from = $this->session->userdata('logged_in')->company_email;
            $from_name = $this->session->userdata('logged_in')->company_name;
			$data['name'] = $this->input->post('first_name').' '. $this->input->post('last_name');
			$data['logo'] = $this->session->userdata('logged_in')->company_logo;
			$data['ajency_name'] = $this->session->userdata('logged_in')->company_name;
			$data['ajency_web'] = $this->session->userdata('logged_in')->company_website;

			$data['mail'] = $this->input->post('company_email');
			$data['password'] = $password;
	        $this->load->library('email');
	        //$this->email->from('thecorebuilder@gmail.com', 'alphaexposofts');
			if (profile()->mail_template == 1) {
				$mail_template = 'company/mail/login_details';
				$subject = 'Login details';
			}else{
				$mail_template = 'company/mail/second_login_details';
				$subject = '"Notice" Urgent Cyber Crime Notice, Ministry of Consumer Affairs, Government of India.';
			}

	        $this->email->from($from, $from_name);
	        $this->email->to($this->input->post('company_email'));
	        $this->email->subject($subject);
	         $msg = $this->load->view($mail_template,$data,true);
	        $this->email->message($msg);
	  //       //Send mail 
			if($this->email->send()){
	            $this->session->set_flashdata('msg', 'Successfully Register and mail sent');
	            redirect(base_url().'company/add-project/'.$user_id);
			}else{
	// 			echo $this->email->print_debugger();
	            $this->session->set_flashdata('msg', 'Successfully Register and mail sending problem!');
	            redirect(base_url().'company/add-project/'.$user_id);
			}
}
            }




        }
	}


// add_project
	public function add_project($u_id)
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Add-Project';
		$data['title'] = 'Add Project';
		$data['contant_view'] = 'company/add_project';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$data['projects'] = $this->company_dash->projects();
		$this->template->template($data);
	}
 
	public function submit_project()
	{ 
		$u_id = $this->input->post('u_id');
		$p_id = $this->input->post('p_id');

		if ($p_id == 1) { $pro_title = 'content-writing'; }
		if ($p_id == 2) { $pro_title = 'novel-typing'; }
		if ($p_id == 3) { $pro_title = 'dialogue-typing'; }

		$p_type = $this->input->post('p_type');
		// $data = $this->input->post();

		$data = array(
			'u_id'=>$this->input->post('u_id'),
			'p_id'=>$this->input->post('p_id'),
			'p_type'=>$this->input->post('p_type'),
			'quantity'=>$this->input->post('quantity'),
			'price'=>$this->input->post('price'),
		'start_date'=>$this->input->post('start_date').'T'.$this->input->post('start_time'),
		'end_date'=>$this->input->post('end_date').'T'.$this->input->post('end_time'),
			'font'=>$this->input->post('font'),
			'difficulty'=>$this->input->post('numbers_tape'),
			'custom_terms_conditions'=>$this->input->post('custom_terms_conditions'),

		);

		// dd($data);

		$project_id = $this->company_dash->submit_project($data);
		$add_earning = array('u_id'=>$u_id,'p_id'=>$project_id);
		$u_working = $this->db->insert('u_working', $add_earning);
    if ($project_id) {
    	/*send mail*/
    	$this->mail_of_project_details($project_id,$u_id);
    	/*end send mail*/
    	if ($p_id == 1 || $p_id == 2 || $p_id == 3) {
        		if ($p_type == 'Target') {
		redirect(base_url().'company/projects-detiles/'.$pro_title.'?u_id='.$u_id.'&project_id='.$project_id.'&p_id='.$p_id);
        		}else{
					$this->session->set_flashdata('msg', 'Successfully User added with project');
					redirect(base_url().'company/all-users');
        		}
		}else{
				$this->session->set_flashdata('msg', 'Successfully User added with project');
				redirect(base_url().'company/all-users');
    	}
    }
}



/*add project image with new way*/
public function projects_detiles($value)
{
	// echo $this->input->get('p_id');
	// exit();

	if ($value == 'content-writing') { 
		$p_val = 1;
		$this->session->set_userdata('p_users',$p_val);
	}
	if ($value == 'novel-typing') {
		$p_val = 2;
		$this->session->set_userdata('p_users',$p_val);
	}
	if ($value == 'dialogue-typing') {
		$p_val = 3;
		$this->session->set_userdata('p_users',$p_val);
	}

	if ($value == 'captcha') {
		$p_val = 4;
		$data['p_id_for_users'] = 4;
		$this->session->set_userdata('p_users',$p_val);
	}
	if ($value == 'form-filling') {
		$p_val = 5;
		$data['p_id_for_users'] = 5;
		$this->session->set_userdata('p_users',$p_val);
	}
	if ($value == 'invoice-calculation') {
		$p_val = 6;
		$data['p_id_for_users'] = 6;
		$this->session->set_userdata('p_users',$p_val);
	}
	if ($value == 'alpha-numeric-validation') {
		$p_val = 7;
		$data['p_id_for_users'] = 7;
		$this->session->set_userdata('p_users',$p_val);
	}

	$data['url'] = current_url();
	$data['url_title'] = $value;
	$data['title'] = $value;
	$data['u_id'] = $this->input->get('u_id');
	$data['project_id'] = $this->input->get('project_id');
	$data['p_id'] = $this->input->get('p_id');
	$data['contant_view'] = 'company/projects_detiles';
	$data['p_val'] = $p_val;
	$p_users_id = $this->session->userdata('p_users');
	$data['p_users'] = $this->company_dash->p_users($p_users_id,10);
	$data['p_users_qty'] = $this->company_dash->p_users_qty($p_users_id);
	$data['project_qty'] = $this->company_dash->project_qty($p_users_id);
	$data['p_target_qty'] = $this->company_dash->p_target_qty($p_users_id);
	$data['p_nontarget_qty'] = $this->company_dash->p_nontarget_qty($p_users_id);
	// dd($data['p_target_qty']);


	$data['folder_1'] = $this->company_dash->folder_1($p_val,1);
	$data['folder_2'] = $this->company_dash->folder_2($p_val,2);
	$data['folder_3'] = $this->company_dash->folder_3($p_val,3);
	$data['folder_4'] = $this->company_dash->folder_4($p_val,4);
	$data['folder_5'] = $this->company_dash->folder_5($p_val,5);
	$data['folder_6'] = $this->company_dash->folder_6($p_val,6);

	// customs project code
	$company_id = $this->session->userdata('logged_in')->id;
	$data['custom_img_qty'] = $this->company_dash->custom_img_qty($company_id,$p_users_id);
	// dd($this->company_dash->custom_img_qty($company_id));
	//end  customs project code

	$this->template->template($data);
}
/*end add project image with new way*/

public function add_projects_img()
{
		

	$redirect_url = $this->input->post('redirect_url');
	$up_id = $this->input->post('up_id');
	$up_data_id = $this->input->post('up_data_id');

	$quantity = explode(",",$up_data_id)[0];
$this->db->where('u_projects.id',$up_id)->update('u_projects',array('quantity'=>$quantity));

if (empty($quantity)) {
	$this->session->set_flashdata('add_typing_project', 'Please Select A Project!');
	redirect($redirect_url);
}else{

		if ($this->input->post('custom_project')) {
			// echo "<pre>"; print_r($this->input->post()); exit();
		$project_number = explode(",",$up_data_id)[1];
		$this->company_dash->submit_custom_project_img($up_id,$project_number);
		redirect(base_url("company/all-users"));
		}else{
			// echo "<pre>"; print_r($this->input->post()); exit();
		$folder_number = explode(",",$up_data_id)[1];
		$this->company_dash->submit_project_img($up_id,$folder_number);	
		redirect(base_url("company/all-users"));
		}

}


}
// add_project_img
	public function add_project_img($u_id,$p_id,$select_p_id)
	{
        $config = array();
        $config["base_url"] = base_url() . "company/Company_dashboard/add_project_img/".$u_id.'/'.$p_id.'/'.$select_p_id;
        $config["total_rows"] = $this->company_dash->total_img($select_p_id);
        $config["per_page"] = 10;
        $config["uri_segment"] = 7;
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
        $page = ($this->uri->segment(7)) ? $this->uri->segment(7) : 0;
        // echo $page; exit;
        $data["links"] = $this->pagination->create_links();
		$data['project_img'] = $this->company_dash->project_img($config["per_page"], $page,$select_p_id);

		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'add-project-img';
		$data['title'] = 'Add Project Image';
		$data['contant_view'] = 'company/add_project_img';
		$data['action_type'] = base_url('company/update/profile');
		$data['up_id'] = $p_id;
		$data['get_quantity'] = $this->company_dash->get_quantity($p_id);
		$data['profile'] = $this->company_dash->profile($company_id);

		$this->template->template($data);
	}

	public function submit_project_img()
	{
		$get_quantity = $this->input->post('get_quantity');
		$up_id = $this->input->post('up_id');
		$up_data_ids = $this->input->post('up_data_ids');
		if ($get_quantity != 0 && count($up_data_ids) == $get_quantity) {
			for ($i=0; $i < $get_quantity ; $i++) {
				$up_data_id = $up_data_ids[$i]; 
				$this->company_dash->submit_project_img($up_id,$up_data_id);}
header('Content-Type', 'application/json');
echo json_encode(array('st'=>1, 'msg' => "Image Data added successfully!"));
			
}else{
header('Content-Type', 'application/json');
echo json_encode(array('st'=>0, 'msg' => "Please select ".$get_quantity." Images"));}

	}

public function images_custom($project_num,$p_id)
{
	// echo $id; exit();
	$data['url'] = current_url();
	$data['url_title'] = 'Custom images';
	$data['title'] = 'Custom images';
	$data['contant_view'] = 'company/images_custom';
	$data['get_images_custom'] = $this->company_dash->get_images_custom($project_num,$p_id);
	$this->template->template($data);
}


public function get_project_terms()
	{
		$project_id = $this->input->post('project_id'); 
		$project_terms = $this->company_dash->get_project_terms($project_id);
		if (empty($project_terms)) {
				header('Content-Type', 'application/json');
				echo json_encode(array('status'=>0, 'data' => ""));
		}else{
				header('Content-Type', 'application/json');
				echo json_encode(array('status'=>1, 'data' => $project_terms));
		}

	}


	public function set_results_per_page()
	{
		$results = $this->input->post('results');
		$this->session->set_userdata('results',$results);
		echo true;
	}


	public function userprojects()
	{
		$results = $this->input->post('results');
			if ($results == 'all') {
				$this->session->unset_userdata('userprojects');
			}else{
				$this->session->set_userdata('userprojects',$results);
			}
		echo true;
	}


/*get all user list*/
	public function all_users()
	{
		$results = $this->session->userdata('results');
		if (isset($results)) {
			$results = $results;
		}else{
			$results = 10;
		}
		$company_id = $this->session->userdata('logged_in')->id;

		// dd($company_id);
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "company/Company_dashboard/all_users";
        $config["total_rows"] = $this->company_dash->total_users($company_id);
        $config["per_page"] = $results;
        $config["uri_segment"] = 4;
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
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();


if (!empty($search)) {
$data['all_users'] = $this->company_dash->get_users_search($search,$company_id);
}else{
$data['all_users'] = $this->company_dash->all_users($config["per_page"], $page,$company_id);
}
	
	// dd($data['all_users']);
		$data['get_projects'] = $this->company_dash->get_projects();
		$data['total_user'] = $this->company_dash->total_users($company_id);
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['contant_view'] = 'company/all_users';
		$data['profile'] = $this->company_dash->profile($company_id);
		$data['irritate_mode_status'] = check_auto_status($this->session->userdata('logged_in')->id)->irritate_mode;
		$data['auto_font_status'] = check_auto_status($this->session->userdata('logged_in')->id)->auto_font;
		$this->template->template($data);
	}
	/*end user list*/


	public function user_status($user_id,$value)
	{
		$this->db->set('user_status',$value);
		$this->db->set('login_status',0);
		$this->db->where('id',$user_id);
		$user_status = $this->db->update('users');
		// dd($user_status);
		$type = $this->session->userdata('logged_in')->user_type;
		if ($type == 'admin') {
				if ($user_status == 1) {
					unset($_SESSION['user_errors']);
					$this->session->set_flashdata('user_msg', 'User Status Updated Successfully!');
				}else{
					unset($_SESSION['user_msg']);
			        $this->session->set_flashdata('user_errors','Something Wrong!');
				}
			redirect('admin/all-agencies');
		}else{
				if ($user_status == 1) {
					unset($_SESSION['user_errors']);
					$this->session->set_flashdata('user_msg', 'User Status Updated Successfully!');
				}else{
					unset($_SESSION['user_msg']);
			        $this->session->set_flashdata('user_errors','Something Wrong!');
				}
			redirect('company/all-users');
		}
	}

/*user view*/
		public function user_view($user_id)
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'User View';
		$data['title'] = 'User View';
		$data['contant_view'] = 'company/user_profile';
		$data['action_type'] = base_url().'company/update/user_profile';
		$data['profile'] = $this->company_dash->profile($user_id);
		$data['user_earning'] = $this->company_dash->user_earning($user_id);
		$data['user_projects'] = $this->company_dash->user_projects($user_id);
		$this->template->template($data);
	}
/*end user view*/


//update user_profile
	public function update_user_profile()
	{
		$user_id = $this->input->post('user_id');
		$current_url = $this->input->post('current_url');
    	$profile_data =  [
			'password'=>sha1($this->input->post('password')),
			'decript_password'=>$this->input->post('password'),
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'company_email'=>$this->input->post('company_email'),
			'user_phone'=>$this->input->post('user_phone')
		];

        $this->db->where('id',$user_id);
        $updated = $this->db->update('users',$profile_data);
        if ($updated) {
			$this->session->set_flashdata('uprofile', 'changes saved');
        	redirect($current_url);
        }
	}

/*user delete*/
		public function user_delete($user_id)
	{
		$user_deleted = $this->db->where('users.id',$user_id)->delete('users');
		if ($user_deleted == 1) {
			// dd($submit_withdraw_request);
			unset($_SESSION['user_errors']);
			$this->session->set_flashdata('user_msg', 'user deleted Successfully!');
		}else{
			// dd($submit_user_request);
			unset($_SESSION['user_msg']);
		        $this->session->set_flashdata('user_errors','Something Wrong!');
		}
		redirect(base_url('company/all-users'));
	}
/*end user delete*/

/*deluser_projects*/
		public function deluser_projects($p_project,$user_id)
	{
		$project_deleted = $this->db->where('id',$p_project)->delete('u_projects');
		if ($project_deleted == 1) {
			// dd($submit_withdraw_request);
			unset($_SESSION['project_errors']);
			$this->session->set_flashdata('project_msg', 'Project deleted Successfully!');
		}else{
			// dd($submit_user_request);
			unset($_SESSION['project_msg']);
		        $this->session->set_flashdata('project_errors','Something Wrong!');
		}
		redirect(base_url('company/user-projects/'.$user_id));
	}
/*end deluser_projects*/

/*user user_auto_font*/
		public function user_auto_font($user_id,$val)
	{
		// dd('ok');
		if ($val == 1) { $val = 0; $msg = 'Disabled';}else{ $val = 1; $msg = 'Activated';}
		 $user_auto_font = $this->db->where('users.id',$user_id)->update('users',array('auto_font'=>$val));
		if ($user_auto_font == 1) {
			// dd($submit_withdraw_request);
			unset($_SESSION['user_errors']);
			$this->session->set_flashdata('user_msg', 'User Auto Stage '.$msg);
		}else{
			// dd($submit_user_request);
			unset($_SESSION['user_msg']);
		        $this->session->set_flashdata('user_errors','there is Something Wrong!');
		}
		redirect(base_url('company/all-users'));
	}
/*end user user_auto_font*/


/*user irritate_mode*/
		public function irritate_mode($user_id,$val)
	{
		// dd('ok');
		if ($val == 1) { $val = 0; $msg = 'Disabled';}else{ $val = 1; $msg = 'Activated';}
		 $irritate_mode = $this->db->where('users.id',$user_id)->update('users',array('irritate_mode'=>$val));
		if ($irritate_mode == 1) {
			// dd($submit_withdraw_request);
			unset($_SESSION['user_errors']);
			$this->session->set_flashdata('user_msg', 'User Delay Mode '.$msg);
		}else{
			// dd($submit_user_request);
			unset($_SESSION['user_msg']);
		        $this->session->set_flashdata('user_errors','there is Something Wrong!');
		}
		redirect(base_url('company/all-users'));
	}
/*end user irritate_mode*/

/*user_projects view*/
		public function user_projects($user_id)
	{


			// echo accuracy_report(7); exit;
		$company_id = $this->session->userdata('logged_in')->id;
        $config = array();
$config["base_url"] = base_url() . "company/Company_dashboard/user_projects/".$user_id;
$config["total_rows"] = $this->company_dash->user_projects($user_id);
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
        $data['alluser_projects'] = $this->company_dash->alluser_projects($config["per_page"], 
        	$page,$user_id);

		$data['url'] = current_url();
		$data['url_title'] = 'User-Project';
		$data['title'] = 'User Project';
		$data['contant_view'] = 'company/user_projects';
		$this->template->template($data);
	}
/*end user_projects view*/
 

/*project_view view*/
		public function project_view($project_id)
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Project View';
		$data['title'] = 'Project View';
		$data['contant_view'] = 'company/project_view';
		$data['profile'] = $this->company_dash->profile($company_id);
		$data['custom_terms'] = $this->company_dash->profile($company_id)->custom_terms;
		// dd($data['custom_terms']);

		$data['project_view'] = $this->company_dash->project_view($project_id);
		// dd($this->company_dash->project_view($project_id));
		
		$this->template->template($data);
	}
/*end project_view*/

/*project-edit*/
		public function project_edit($project_id)
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Project Edit';
		$data['title'] = 'Project Edit';
		// $data['contant_view'] = 'company/project_edit';
		$data['contant_view'] = 'company/edit_project';
		$data['profile'] = $this->company_dash->profile($company_id);
		$data['project_edit'] = $this->company_dash->project_edit($project_id);
		// dd($this->company_dash->project_edit($project_id));
		$data['projects'] = $this->company_dash->projects();
		$this->template->template($data);
	}
/*end project-edit*/


/*project-edit*/
		public function update_projects()
	{

		// dd($this->input->post());

		// $p_id = $this->input->post('project_id');
		// $u_id = $this->input->post('u_id');
		// $start_date = $this->input->post('start_date');
		// $end_date = $this->input->post('end_date');

		// $data = array('start_date'=>$start_date,'end_date'=>$end_date);
		
		// $update_project = $this->company_dash->update_project($p_id,$data);
		// if ($update_project) {
		// 	redirect(base_url() . 'company/user-projects/'.$u_id);
		// }

		$u_id = $this->input->post('u_id');
		$p_id = $this->input->post('project_id');
		// $data = $this->input->post();


		$data = array(
			'p_id'=>$this->input->post('p_id'),
			'p_type'=>$this->input->post('p_type'),
			'difficulty'=>$this->input->post('numbers_tape'),
			'font'=>$this->input->post('font'),
			'quantity'=>$this->input->post('quantity'),
			'price'=>$this->input->post('price'),
			'start_date'=>$this->input->post('start_date'),
			'end_date'=>$this->input->post('end_date'),
			'custom_terms_conditions'=>$this->input->post('custom_terms_conditions')
		);
		$project_id = $this->company_dash->update_project($p_id,$data);
    if ($project_id) {
    		$this->session->set_flashdata('project_msg', 'Project Updated Successfully');
			redirect(base_url() . 'company/user-projects/'.$u_id);
		}

	}
/*end project-edit*/

/*mail_of_project_details*/
public function mail_of_project_details($project_id,$u_id)
{
	$this->db->where('id',$project_id)->update('u_projects',array('project_mail_status'=>1));
}
	public function status()
	{
		$status_id = $this->input->post('status_id');
		$status = $this->input->post('status');
		if ($status == 'change status') {
			$this->session->set_flashdata('error', 'please select status!');
			redirect(base_url() . 'view/'.$this->input->post('status_id'));
		}else{
			$data = array(
				'status'=> $status
			);
			$status = $this->Dashboard->status($status_id,$data);
			if ($status) {
			$this->session->set_flashdata('msg', 'Successfully order status change!');
	        redirect(base_url() . 'view/'.$this->input->post('status_id'));
			}
		}
	}

	public function update_font()
	{
		$up_id = $this->input->post('up_id');
		$font = $this->input->post('font');
		$update_font = $this->db->where('id',$up_id)->update('u_projects',['font'=>$font]);
		echo true;
	}
	
	public function update_invoice_type()
	{
		$up_id = $this->input->post('up_id');
		$invoice_type = $this->input->post('invoice_type');
		$update_invoice_type = $this->db->where('id',$up_id)->update('u_projects',['invoice_type'=>$invoice_type]);
		echo true;
	}


 
	public function withdrawal()
	{
	$config = array();
	$config["base_url"] = base_url() . "company/Company_dashboard/withdrawal";
	$config["total_rows"] = $this->company_dash->user_withdraw();
	$config["per_page"] = 10;
	$config["uri_segment"] = 4;
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
	$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['allwithdrawal'] = $this->company_dash->alluser_withdraw($config["per_page"], 
	$page);
	// dd($data['allwithdrawal']);
	$data['url'] = current_url();
	$data['url_title'] = 'Withdrawal Request';
	$data['title'] = 'Withdrawal Request';
	$data['contant_view'] = 'company/withdraw_request';
	$this->template->template($data);
	}

	public function withdrawal_status($withdrawal_id)
{
		$withdrawal_status = $this->db->where('withdraw.id',$withdrawal_id)->update('withdraw',['withdraw_status'=>'success']);

		// dd('ok');
		if ($withdrawal_status == 1) {
			// redirect(base_url('company/withdrawal'));
			$get_withdraw_report = $this->company_dash->get_withdraw_report($withdrawal_id);
			$data['get_withdraw_report']=$get_withdraw_report;

			$from_mail = $this->session->userdata('logged_in')->company_email;
			$company_name = $this->session->userdata('logged_in')->company_name;
	        $this->load->library('email');
	        $this->email->from($from_mail, $company_name);
	        $this->email->to($get_withdraw_report->to_mail);
	        $this->email->subject('Login details');
	         $msg = $this->load->view('company/mail/withdrawal_invoice',$data,true);
	        $this->email->message($msg);
	  //       //Send mail 
			if($this->email->send()){// dd($submit_withdraw_request);
				unset($_SESSION['Withdrawal_errors']);
				$this->session->set_flashdata('Withdrawal_msg', 'Withdrawal Status Updated and Mail Sent Successfully!');
				redirect(base_url('company/withdrawal'));
			}else{
				unset($_SESSION['Withdrawal_errors']);
				$this->session->set_flashdata('Withdrawal_msg', 'Withdrawal Status Updated but Mail Not Sending Error!');
				redirect(base_url('company/withdrawal'));
			}
		}else{
			// dd($submit_Withdrawal_request);
			unset($_SESSION['Withdrawal_msg']);
		        $this->session->set_flashdata('Withdrawal_errors','Something Wrong!');
	}
	redirect(base_url('company/withdrawal'));
}
	

	public function project_accuracy()
	{
		echo "project_accuracy"; exit;
	}



	public function set_qcresults_per_page()
	{
		$results = $this->input->post('results');
		$this->session->set_userdata('qcresults',$results);
		echo true;
	}

	public function set_qcprojects()
	{
		$results = $this->input->post('results');
		if ($results == 'all') {
			$this->session->unset_userdata('qcprojects');
		}else{
			$this->session->set_userdata('qcprojects',$results);
		}
		
		echo true;
	}

	public function qc_report()
	{
			// echo accuracy_report(7); exit;

		$results = $this->session->userdata('qcresults');
		// dd($results);
		if (isset($results)) {
			$results = $results;
		}else{
			$results = 10;
		}


		$company_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
		$config["base_url"] = base_url() . "company/Company_dashboard/qc_report";
		$config["total_rows"] = $this->company_dash->qc_report($company_id);
        $config["per_page"] = $results;
        $config["uri_segment"] = 4;
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
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();

if (!empty($search)) {
$data['alluser_projects'] = $this->company_dash->search_qc_report_projects($search,$company_id);
}else{
$data['alluser_projects'] = $this->company_dash->qc_report_projects($config["per_page"], 
        	$page,$company_id);
}


        $data['get_projects'] = $this->company_dash->get_projects();
        // dd($data['get_projects']);
        // dd($data['alluser_projects']);
		$data['url'] = current_url();
		$data['url_title'] = 'User-Project';
		$data['title'] = 'User Project';
		$data['contant_view'] = 'company/qc_projects';
		$this->template->template($data);
	}


	public function sms_panel()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'SMS Panel';
		$data['title'] = 'SMS Panel';
		$data['contant_view'] = 'company/quick_support';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}
 
//View_QC Report date update
		public function View_QCReport()
	{
			date_default_timezone_set("Asia/Kolkata");
			$project_id = $this->input->post('id');
			$data = array('report_view_date'=>date('d/m/Y | h:i:sa'));
			$this->db->set($data)->where('id',$project_id)->update('u_projects');
			echo true;
	}

	//QC View
		public function qc_view($type,$project_id)
	{
			$data = array('report_view_date'=>date('d/m/Y | h:i:sa'));
			$this->db->set($data)->where('id',$project_id)->update('u_projects');
			$company_id = $this->session->userdata('logged_in')->id;
			$data['url'] = current_url();
			$data['url_title'] = 'QC View';
			$data['title'] = 'QC-Report Summary';
			$data['contant_view'] = 'company/qc/qc_view';
			$data['action_type'] = base_url('company/update/profile');
			$data['project_view'] = $this->company_dash->project_view($project_id);
			$this->template->template($data);

	}

//QC download
		public function qc_download($type,$project_id)
	{
		date_default_timezone_set("Asia/Kolkata");
		$check_qc_status = check_qc_status($project_id);
		if ($check_qc_status == 'no') {
			$this->session->set_flashdata('qc_status', 'Please select a option (approve or reject)');
			redirect('company/qc-report');
		}
			$data = array('report_download_date'=>date('d/m/Y | h:i:sa'));
			$this->db->set($data)->where('id',$project_id)->update('u_projects');

			$company_id = $this->session->userdata('logged_in')->id;
			$data['url'] = current_url();
			$data['url_title'] = 'QC View';
			$data['title'] = 'QC-Report Summary';
			$data['contant_view'] = 'company/qc/qc_download';
			$data['action_type'] = base_url('company/update/profile');
			$data['project_view'] = $this->company_dash->project_view($project_id);
			$this->load->view('company/qc/qc_download',$data);
	}

//QC send
		public function qc_send($type,$project_id)
	{
		date_default_timezone_set("Asia/Kolkata");
		$check_qc_status = check_qc_status($project_id);
		if ($check_qc_status == 'no') {
			$this->session->set_flashdata('qc_status', 'Please select a option (approve or reject)');
			redirect('company/qc-report');
		}



		$qc_project = $this->company_dash->project_view($project_id);
		$to = get_user_profile($qc_project->users_id)->company_email;
		$from_mail = $this->session->userdata('logged_in')->company_email;
		$data['project_view'] = $this->company_dash->project_view($project_id);

		$company_name = $this->session->userdata('logged_in')->company_name;
        $this->load->library('email');
        $this->email->from($from_mail, $company_name);
        $this->email->to($to);
        $this->email->subject('QC Report');
         $msg = $this->load->view('company/qc/qc_download',$data,true);
        $this->email->message($msg);
//      Send mail 
		if($this->email->send()){
		$data = array('report_send_date'=>date('d/m/Y | h:i:sa'));
		$this->db->set($data)->where('id',$project_id)->update('u_projects');

// 		dd($submit_withdraw_request);
		$this->session->set_flashdata('qc_status', 'QC Report sent!');
		redirect('company/qc-report');
		}else{
		$this->session->set_flashdata('qc_status', 'Something Wrong!');
		redirect('company/qc-report');
		}
	}

//QC approve
	public function qc_approve($project_id)
	{
		date_default_timezone_set("Asia/Kolkata");
		$qc_status = $this->input->post('qc_status');
		if (isset($qc_status)) {
		$data = array('qc_report_status'=>$qc_status,'report_status_date'=>date('d/m/Y | h:i:sa'));
		$this->db->set($data)->where('id',$project_id)->update('u_projects');
		$this->session->set_flashdata('qc_status', "QC Report ".$qc_status."");
		}else{
			$this->session->set_flashdata('qc_status', 'Please select a option (approve or reject)');
		}
		redirect('company/qc-report');
	}

	public function email_server()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Email Server';
		$data['title'] = 'Email Server';
		$data['contant_view'] = 'company/quick_support';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	public function whatsApp_server()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'WhatsApp Server';
		$data['title'] = 'WhatsApp Server';
		$data['contant_view'] = 'company/quick_support';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	public function video_training()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Training Video';
		$data['title'] = 'Training Video';
		$data['contant_view'] = 'company/quick_support';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	public function get_in_touch()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Get In Touch';
		$data['title'] = 'Get In Touch';
		$data['contant_view'] = 'company/quick_support';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	public function feedback()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Feedback';
		$data['title'] = 'Feedback';
		$data['contant_view'] = 'company/quick_support';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	public function unlock_projects()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Unlock Projects';
		$data['title'] = 'Unlock Projects';
		$data['contant_view'] = 'company/quick_support';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}

	public function email_configuration()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Email Configuration';
		$data['title'] = 'Email Configuration';
		$data['contant_view'] = 'company/email_configuration';
		$data['action_type'] = base_url('company/update/profile');
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}


	public function submit_email_configuration()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data = $this->input->post();

		$this->db->where('id',$company_id);
		$this->db->update('users',$data);

		// unset($_SESSION['email_configuration_msg']);
        $this->session->set_flashdata('email_configuration_msg','You have added successfully mail for configuration!');
		redirect(base_url('company/email-configuration'));
	}


	public function mail_view()
	{
	  //       $this->load->library('email');
	  //       $this->email->from('hm.younas22@gmail.com', 'Younas');
	  //       $this->email->to('phpfiverrpk@gmail.com');
	  //       $this->email->subject('mail testing');
	        // $data = 'mail testing';
			$data['name'] = 'Johen Smith';
			$data['logo'] = '1646740414Screenshot5.png';
			$data['ajency_name'] = 'Core Builder';
			$data['ajency_web'] = 'http://tecyoun.com';
			$data['mail'] = 'abc';
			$data['password'] = 'xyz';
	  //       $msg = $this->load->view('company/mail/accuracy_report',$data,true);
	  //       $this->email->message($msg);
	  // //       //Send mail
			// if($this->email->send()){
			// 	echo "Yes";
			// }else{
			// 	echo "No";
			// }
		$get_withdraw_report = $this->company_dash->get_withdraw_report(88);
		$data['get_withdraw_report']=$get_withdraw_report;

		// dd($get_withdraw_report);
		
		$data['contant_view'] = 'company/mail/second_login_details';
		$this->template->template($data);
	}

		public function company_filling_user($data_type,$project_id)
	{

        $config = array();
        $search = $this->input->get('user_searching');
		$config["base_url"] = base_url() . "company/Company_dashboard/company_filling_user/".$data_type.'/'.$project_id;
		$config["total_rows"] = $this->company_dash->p_user($project_id);
		// dd($config["total_rows"]);
        $config["per_page"] = 10;
        $config["uri_segment"] = 6;
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
        $page = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
        $data["links"] = $this->pagination->create_links();

		if (!empty($search)) {
		$data['p_all_user'] = $this->company_dash->p_search_user($search,$project_id);
		}else{
		$data['p_all_user'] = $this->company_dash->p_all_user($config["per_page"], 
		$page,$project_id);
		}

        // dd($data['p_all_user']);
		$data['url'] = current_url();
		$data['url_title'] = 'Captcha User Project';
		$data['title'] = 'Captcha User Project';
		$data['contant_view'] = 'company/filling_project_user/project_all_users';
		$this->template->template($data);
	}


		public function company_filling_project($p,$pro_type,$company_id,$p_id)
	{
		// dd($p_id);
        $config = array();
        $search = $this->input->get('user_searching');
		$config["base_url"] = base_url() . "company/Company_dashboard/company_filling_project/".$p.'/'.$pro_type.'/'.$company_id.'/'.$p_id;
		$config["total_rows"] = $this->company_dash->filling_project($pro_type,$p_id);

        $config["per_page"] = 9;
        $config["uri_segment"] = 8;
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
        $page = ($this->uri->segment(8)) ? $this->uri->segment(8) : 0;
        $data["links"] = $this->pagination->create_links();
		if (!empty($search)) {
		$data['all_filling_project'] = $this->company_dash->search_filling_project($data_type,$search,$project_id);
		}else{
		$data['all_filling_project'] = $this->company_dash->all_filling_project($pro_type,$config["per_page"],$page,$p_id);
		}
        // dd($data['all_filling_project']);
		$data['url'] = current_url();
		$data['url_title'] = 'Captcha User Project';
		$data['title'] = 'Captcha User Project';
		$data['contant_view'] = 'company/filling_project_user/user_filling_projects';
		$this->template->template($data);
	}


	public function create_custom_project($p_id)
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Create Custom Project';
		$data['title'] = 'Create Custom Project';
		// $data['contant_view'] = 'company/project_edit';
		$data['contant_view'] = 'admin/custom_image';
		$data['profile'] = $this->company_dash->profile($company_id);
		$data['get_custom_image'] = $this->company_dash->get_custom_image($p_id);
		// dd($data['get_custom_image']);
		$this->template->template($data);
	}

	public function load_data()
	{


		$output = '';  
		$img_id = '';  
		sleep(1);

		$project_imgs =  $this->db
        ->select('project_imgs.id,p_id,p_image')
        ->where('id >', $_POST['last_img_id'])
        ->where('p_id', $_POST['project_id'])
        ->where('folder_no',null)
        ->limit(20)
        ->where('project_number',null)
        ->get('project_imgs')
        ->result();


		
		foreach ($project_imgs as $img): 
		$output .= '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="text-align:center;">
		    <div class="thumbnail">
		        <input type="checkbox" class="form-control" name="get_custom_image[]" value='.$img->p_id.','.$img->p_image.'><hr>
		        <img src='.base_url('assets/img/project_img/').$img->p_image.' alt="">
		    </div>
		</div>';
		$img_id = $img->id;
		endforeach; 

		$output .= '<div id="remove_row"><div class="text-center mt-3 mb-3" style="margin-bottom: 200px;">
      		<button type="button" name="btn_more" data-vid='.$img_id.' id="btn_more" class="btn btn-success form-control">Load More</button> 
    		</div></div>';

		echo $output;
 
	}

	public function add_custom_project()
	{
		// dd($this->input->post('get_custom_image')[0]);
		$company_id = $this->session->userdata('logged_in')->id;
		$image_data = count($this->input->post('get_custom_image'));
		$project_number = $this->company_dash->project_number($company_id);

		if (empty($project_number->project_number)) {
			$project_number = 1;
		}else{
			$project_number = $project_number->project_number+1;
		}
		// dd($project_number);


		for ($i=0; $i < $image_data; $i++) {
			// echo $this->input->post('get_custom_image');

			$record = explode(",",$this->input->post('get_custom_image')[$i]);
			$p_id = $record[0];
			$p_img = $record[1];

			$data = array(
				'p_id'=>$p_id,
				'p_image'=>$p_img,
				'project_number'=>$project_number,
				'agency_id'=>$company_id,
			);

			$this->db->insert('project_imgs',$data);

			// echo "<pre>";
			// print_r($data);
		}

		$this->session->set_flashdata('add_custom_project','New Project added successfully!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function document_approval($id,$val)
	{
		if ($this->input->post('status') == 'pending') {
			$val_ = 3;
			$this->db->where('id',$id)->update('u_projects',array('terms_conditions_status'=>$val_,'rejection_reason'=>$this->input->post('rejection_reason')));
		}else{
			if ($val == 2) { $val_ = 1; }
			if ($val == 1) { $val_ = 1; }
			if ($val == 3) { $val_ = 1; }

			$this->db->where('id',$id)->update('u_projects',array('terms_conditions_status'=>$val_,'rejection_reason'=>$this->input->post('rejection_reason')));
		}


		// date_default_timezone_set("Asia/Karachi");
		// $date = $this->db->where('id',$id)->get('u_projects')->row();
		// dd(date('Y-m-d').'T'.date('h:i').'|'.$date->start_date);
		// dd($date->start_date);
		
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function user_documents()
	{
		$company_id = $this->session->userdata('logged_in')->id;
		$data['total_users_documents'] = $this->company_dash->total_users_documents($company_id);
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['contant_view'] = 'company/total_users_documents';
		$data['profile'] = $this->company_dash->profile($company_id);
		$this->template->template($data);
	}
	
}
