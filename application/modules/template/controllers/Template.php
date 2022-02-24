<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {


		function __construct()
	{
		parent::__construct();
	}
	

	public function template($data = NULL)
	{
		$this->load->view('template/template_v',$data);
		// echo "This is deshboard Controller";
	}

	public function admin_template($data = NULL)
	{
		$this->load->view('template/admin/template',$data);
		// echo "This is deshboard Controller";
	}
}
