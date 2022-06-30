<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_account_api extends MY_Controller {
  


		function __construct()
	{
		parent:: __construct();
		$this->load->model('LoginModel_', 'login_');
	} 

public function doLogin() {
	$email = $this->input->post('email');
	$password = sha1($this->input->post('password'));
	$project_id = $this->input->post('project_id');
	$this_project = $project_id;
	$check_login = $this->login_->checkLogin($email, $password);
	$get_this_project = $this->login_->this_project($check_login->id,$this_project);

//main if start
if (!empty($get_this_project)) {

	if ($check_login) {
		if ($check_login->p_status == 1) {
			if (check_login_status($check_login->core_user_id) > 0) 
            {
			$get_user_project = $this->login_->get_user_project($get_this_project->project_id);
			header('Access-Control-Allow-Origin: *');
			header('Content-Type: application/json');
			echo json_encode(array(
			'msg'=>200,
			'res'=>array(
			'user_details'=>$check_login,
			'project_detials'=>$get_user_project
			),
			'status'=>true,
			));
			}else{
			header('Access-Control-Allow-Origin: *');
			header('Content-Type: application/json');
			echo json_encode(array(
			'msg'=>201,
			'res'=>'Please login in your main project',
			'status'=>false,
			));
			}

		}else{
			header('Access-Control-Allow-Origin: *');
			header('Content-Type: application/json');
			echo json_encode(array(
			'msg'=>201,
			'res'=>'Your account is not active yet.',
			'status'=>false,
			));
		}


	}else{
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode(array(
		'msg'=>201,
		'res'=>'Something Went Wrong!',
		'status'=>false,
		));            
	}








}else{
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode(array(
		'msg'=>201,
		'res'=>'Something Went Wrong!',
		'status'=>false,
		));            
	}
//main if end


}




    //////////////////do regester//////////

    public function do_register()
    {
 
        // dd($this->input->post());
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $password = sha1($this->input->post('password'));
            $check_user = $this->login_->check_user($email,$phone);
            // dd($check_user);
            if (!empty($check_user)) {
            	if (check_already_exist($email,$phone)==1) {
	            	header('Access-Control-Allow-Origin: *');
					header('Content-Type: application/json');
	                echo json_encode(array(
	                	'msg'=>201,
	                	'res'=>'Already exist!',
	                	'status'=>false,
	                ));
	                exit;
            	}
	           $data = [
	                'core_user_id' => $check_user->id,
	                'name' => $name,
	                'email' => $email,
	                'phone' => $phone,
	                'password' => $password,
	                'de_password' => $this->input->post('password'),
	                'start_project' => date('Y-m-d h:i'),
	                'end_project' => date('Y-m-d h:i', strtotime("+6 months", strtotime(date('Y-m-d h:i'))))
	            ];
	            
	            // dd($data);
	            $insert_data = $this->login_->add_users($data);
	            if ($insert_data) {


			// $data['mail'] = $this->input->post('email');
			// $data['password'] = $password;
	  //       $this->load->library('email');
	  //       $this->email->from('thecorebuilder@gmail.com', 'alphaexposofts');
	  //       $this->email->to($this->input->post('company_email'));
	  //       $this->email->subject('Login details');
	  //        $msg = $this->load->view('company/mail/login_details',$data,true);
	  //       $this->email->message($msg);


	            	header('Access-Control-Allow-Origin: *');
					header('Content-Type: application/json');
	                echo json_encode(array(
	                	'msg'=>200,
                	'res'=>'Account Created. Once your account is active, you will receive confirmation email',
	                	'status'=>true,
	                ));
	            }else{
	            	header('Access-Control-Allow-Origin: *');
					header('Content-Type: application/json');
	                echo json_encode(array(
	                	'msg'=>201,
	                	'res'=>'Something wrong!',
	                	'status'=>false,
	                ));
	            }
            }else{
            	header('Access-Control-Allow-Origin: *');
				header('Content-Type: application/json');
                echo json_encode(array(
                	'msg'=>201,
                	'res'=>'Something went wrong!!',
                	'status'=>false,
                ));
            }
 
        
    }


//profile
public function profile_data()
{
	$core_user_id = $this->input->post('core_user_id');
	$project_id = $this->input->post('project_id');
	$core_user_data = $this->db->where('auto_users_id',$core_user_id)->where('project_id',$project_id)->get('configure_project')->row();

	if ($core_user_data) {
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>200,
	'res'=>$core_user_data,
	'status'=>true,
	));
	}else{
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>201,
	'res'=>'Something went wrong, try again later',
	'status'=>false,
	));
	}
}


}