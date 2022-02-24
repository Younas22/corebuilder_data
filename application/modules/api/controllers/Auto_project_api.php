<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_project_api extends MY_Controller {

function __construct()
{
	parent:: __construct();
	$this->load->model('Auto_project_m','auto_project');
}

public function get_all_project()
{
	$main_project_id = $this->input->get('main_project_id');
	$user_id = $this->input->get('user_id');
	$get_projects = $this->auto_project->get_all_project($main_project_id,$user_id);
	if($get_projects) {
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>200,
	'res'=>$get_projects,
	'status'=>true,
	));
	}else{
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>201,
	'res'=>'projects not found!',
	'status'=>false,
	));
	}
}


public function get_project()
{

	$project_id = $this->input->get('project_id');
	// $this->configure_project($project_id);
	$get_projects = $this->auto_project->alluser_projects($project_id);

	if ($get_projects) {
	$check_dedline = $this->auto_project->check_dedline($get_projects->project_id);
	// dd($check_dedline);
	if ($check_dedline == 1) {
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>200,
	'res'=>$get_projects,
	'status'=>true,
	));
	}else{
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>201,
	'res'=>'project is end',
	'status'=>false,
	));
	}

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

public function get_report()
{
	$project_id = $this->input->get('project_id');
	// $this->configure_project($project_id);
	$get_projects = $this->auto_project->alluser_projects($project_id);

	if ($get_projects) {
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>200,
	'res'=>$get_projects,
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


public function configure_project($project_id)
{
	$get_projects_ = $this->auto_project->configure_project($project_id);
	$get_projects = $this->auto_project->alluser_projects($project_id);
	if ($get_projects) {
	$check_dedline = $this->auto_project->check_dedline($get_projects->project_id);
	if ($check_dedline == 1) {
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>200,
	'res'=>$get_projects,
	'status'=>true,
	));
	}else{
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	echo json_encode(array(
	'msg'=>201,
	'res'=>'project is end',
	'status'=>false,
	));
	}

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



//add data
public function submit_auto_project()
{
	$project_id = $this->input->get('page');
	$enty_number = $this->input->get('enty_number');
	$u_working = $this->db->where('p_id',$project_id)->get('u_working')->row();
	$user_id = $u_working->u_id;
	if (check_login_status($user_id) > 0) 
    {
		$enty_number = $this->auto_project->submit_enty($project_id,$enty_number);
		$submit_auto_project = $this->auto_project->submit_auto_project($project_id);
		if ($submit_auto_project) {
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode(array(
		'msg'=>200,
		'res'=>'project submited',
		'status'=>true,
		));
		}else{
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode(array(
		'msg'=>201,
		'res'=>'Something Wrong!',
		'status'=>false,
		));
		}
	}else{
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		echo json_encode(array(
		'msg'=>205,
		'res'=>'user account is logout',
		'status'=>false,
		));
	}
}

}