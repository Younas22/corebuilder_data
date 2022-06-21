<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_auto_user extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_auto_user_M','admin_auto_user');
		// $this->load->model('admin/Admin_dashboard_M','admin_dash');
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
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "admin/Admin_auto_user/index";
        $config["total_rows"] = $this->admin_auto_user->total_auto_users($admin_id);
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

 
	if (!empty($search)) {
	$data['all_users'] = $this->admin_auto_user->auto_users_search($search,$admin_id);
	}else{
    $data['all_users'] = $this->admin_auto_user->all_auto_users($config["per_page"], $page,$admin_id);
	}
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['action'] = base_url('admin/auto-users');
		$data['contant_view'] = 'admin/all_auto_users';
		$data['get_projects'] = $this->admin_auto_user->get_projects();
		$this->template->template($data);
	}

	/*user delete*/
		public function user_delete($user_id)
	{
		$user_deleted = $this->db->where('autotyper_users.id',$user_id)->delete('autotyper_users');
		if ($user_deleted == 1) {
			// dd($submit_withdraw_request);
			unset($_SESSION['user_errors']);
			$this->session->set_flashdata('user_msg', 'auto user deleted Successfully!');
		}else{
			// dd($submit_user_request);
			unset($_SESSION['user_msg']);
		        $this->session->set_flashdata('user_errors','Something Wrong!');
		}
		redirect(base_url('admin/auto-users'));
	}
/*end user delete*/

	public function user_status($user_id,$value)
	{
		$this->db->set('p_status',$value);
		$this->db->where('id',$user_id);
		$user_status = $this->db->update('autotyper_users');
		$get_user_data = $this->db->where('id',$user_id)->get('autotyper_users')->row();
		// dd($user_status);
		$type = $this->session->userdata('logged_in')->user_type;
		if ($type == 'admin') {
				if ($user_status == 1) {
					unset($_SESSION['user_errors']);
					if ($value == 1) {

// $from = $this->session->userdata('logged_in')->company_email;
$to = $get_user_data->email;
$data['mail'] = $get_user_data->email;
$data['password'] = $get_user_data->de_password;
$this->load->library('email');
$this->email->from('hm.younas22@gmail.com', 'Rogpad Team');
$this->email->to($to);
$this->email->subject('Login details');
$msg = $this->load->view('company/mail/autotyper_account',$data,true);
$this->email->message($msg);
$this->email->send();
// if ($this->email->send()) {
// 	echo "mail sent"; exit();
// }else{
// 	echo "mail not sent"; exit();
// }

					unset($_SESSION['user_disable']);
					$this->session->set_flashdata('user_msg', 'User Account Activated!');
					}else{
						unset($_SESSION['user_msg']);
					$this->session->set_flashdata('user_disable', 'User Account disabled!');
					}

				}else{
					unset($_SESSION['user_msg']);
			        $this->session->set_flashdata('user_errors','Something Wrong!');
				}
			redirect('admin/auto-users');
		}
	}

		public function auto_p()
	{
		$project_id = $this->input->post('project_id');
		$user_id = $this->input->post('user_id');
		$update_invoice_type = $this->db->where('id',$user_id)->update('autotyper_users',['main_pid'=>$project_id]);
		echo true;
	}

		public function auto_p_type()
	{
		$user_id = $this->input->post('user_id');
		$type = $this->input->post('type');
		$update_invoice_type = $this->db->where('id',$user_id)->update('autotyper_users',['project_type'=>$type]);
		echo true;
	}


	//auto_users_profile
	public function auto_users_profile()
	{
		$auto_users_id = $_GET['auto_users_id'];
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/auto_typer_profile';
		$data['action_type'] = base_url('admin/update/update_auto_typer_profile');
		$data['projects'] = $this->db->where('id',$auto_users_id)->get('autotyper_users')->row();
		$data['autotyper_users'] = $this->db->where('id',$auto_users_id)->get('autotyper_users')->row();
		// dd($data['autotyper_users']);
		$this->template->template($data);
	}


	//admin/get_autotyper_user_project
	public function get_autotyper_user_project()
	{
		$autotyper_user_project = $_POST['autotyper_user_project'];
		$get_earning_details = $this->db->where('p_id',$autotyper_user_project)->get('u_working')->row();
		echo json_encode(['res'=>$get_earning_details, 'status'=>201]);
	}


	//admin/update_auto_typer_profile
	public function update_auto_typer_profile()
	{
		$autotyper_user_project = $this->input->post('autotyper_user_project');
		$core_user_id = $this->input->post('core_user_id');
		$time = $this->input->post('time');
		$earning_data = [
			'_right'=>$this->input->post('right'),
			'wrong'=>$this->input->post('wrong'),
			'complete_work'=>$this->input->post('complete'),
			'earning'=>$this->input->post('earning')
		];
		$this->db->where('p_id',$autotyper_user_project)->update('u_working',$earning_data);
		$this->db->where('core_user_id',$core_user_id)->update('autotyper_users',['time'=>$time]);
		redirect($_SERVER['HTTP_REFERER']);
	}

}