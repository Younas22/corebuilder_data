<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
		$user_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-dashboard';
		/*home email*/
		$data['mail_compaign_status'] = $this->db->where('user_id',$user_id)->get('mail_compaign_status')->row();
		// dd($data['total_mail']);
		$this->template->template($data);
	}


  
	public function email()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-tool';
		$this->template->template($data);
	}


  
	public function template()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-template';
		$this->template->template($data);
	}


  
	public function setting()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/email-setting';
		$this->template->template($data);
	}
  
	public function create_compaign()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/create_compaign';
		$this->template->template($data);
	}


	public function add_compaign()
	{
		if (!empty($_FILES['email_file']['name'])) {
        $config['upload_path'] = './assets/email';
        $config['allowed_types'] = 'xlsx';
        $email_file = $_FILES['email_file']['name'];
        $this->load->library('upload', $config);
        $this->upload->do_upload('email_file');
    	}
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load("assets/email/".$email_file."");
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		unset($sheetData[0]);

    	$compaign_data = [
    		'total_mail'=>count($sheetData),
    		'email_file'=>$email_file,
    		'user_id'=>$this->session->userdata('logged_in')->id,
    		'compaign_name'=>$this->input->post('compaign_name'),
    		'subject'=>$this->input->post('subject'),
    		'from_mail'=>$this->input->post('from_mail'),
    		'contant'=>$this->input->post('contant'),
    		'tmplate'=>$this->input->post('tmplate')
    	];

    	$mail_compaign = $this->db->insert('mail_compaign',$compaign_data);
		if ($mail_compaign) {
			

			$user_id = $this->session->userdata('logged_in')->id;
			$mail_data = $this->db->select()
			->where('user_id',$user_id)
			->order_by('mail_compaign.id',"desc")
			->limit(1)->get('mail_compaign')->row();

			$all_compaign_status = array(
	    		'mail_compaign_id'=>$mail_data->id,
	    		'all_mail'=>$mail_data->total_mail,
	    		'opened'=>90*$mail_data->total_mail/100,
	    		'clicked'=>60*$mail_data->total_mail/100,
	    		'blacklisted'=>10*$mail_data->total_mail/100
			);
		$added_all_compaign_status = $this->db->insert('all_compaign_status',$all_compaign_status);
			
			if ($added_all_compaign_status) {
			$mail_compaign_status = array(
	    		'user_id'=>$this->session->userdata('logged_in')->id,
	    		'all_mail'=>$mail_data->total_mail
			);

			$get_mail_compaign_status = $this->db->where('user_id',$user_id)->get('mail_compaign_status')->row();
			if (empty($get_mail_compaign_status)) {
				$this->db->insert('mail_compaign_status',$mail_compaign_status);
			}

   //  		$opened = 90*$mail_data->total_mail/100;
   //  		$clicked = 60*$mail_data->total_mail/100;
   //  		$blacklisted= 10*$mail_data->total_mail/100;
   //  		$total_mail= $mail_data->total_mail;

			// $this->db->set('all_mail','all_mail+'.$total_mail, FALSE);
			// $this->db->set('opened','opened+'.$opened, FALSE);
   //          $this->db->set('clicked','clicked+'.$clicked, FALSE);
   //          $this->db->set('blacklisted','blacklisted+'.$blacklisted, FALSE);
   //          $this->db->where('user_id',$user_id);
   //          $res = $this->db->update('mail_compaign_status');
            // dd('ok');
		}
			
			unset($_SESSION['compaign_errors']);
			$this->session->set_flashdata('compaign_msg', 'Compaign created successfully!');
		}else{
			unset($_SESSION['compaign_msg']);
		        $this->session->set_flashdata('compaign_errors','something wrong!');
		}

    	redirect('company/email-tool');

	}


		public function template_one()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/template_one';
		$this->template->template($data);
	}

		public function template_two()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'company/email_tool/template_two';
		$this->template->template($data);
	}

		public function opened_status()
	{
		$user_id = $this->session->userdata('logged_in')->id;
		$this->db->set('opened_status','opened_status+'.(int)1, FALSE);
		$this->db->set('opened','opened-'.(int)1, FALSE);
		// $this->db->set('clicked','clicked+'.$clicked, FALSE);
		// $this->db->set('blacklisted','blacklisted+'.$blacklisted, FALSE);
		$this->db->where('user_id',$user_id);
		$res = $this->db->update('mail_compaign_status');
		return true;
	}


		public function clicked_status()
	{
		$user_id = $this->session->userdata('logged_in')->id;
		$this->db->set('clicked_status','clicked_status+'.(int)1, FALSE);
		$this->db->set('clicked','clicked-'.(int)1, FALSE);
		$this->db->where('user_id',$user_id);
		$res = $this->db->update('mail_compaign_status');
		return true;
	}


		public function blacklisted_status()
	{
		$user_id = $this->session->userdata('logged_in')->id;
		$this->db->set('blacklisted_status','blacklisted_status+'.(int)1, FALSE);
		$this->db->set('blacklisted','blacklisted-'.(int)1, FALSE);
		$this->db->where('user_id',$user_id);
		$res = $this->db->update('mail_compaign_status');
		return true;
	}

}