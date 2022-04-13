<?php

if ($contant_view == 'account/signin' or 
	$contant_view == 'account/signup' or 
	$contant_view == 'account/user_signin' or 
	$contant_view == 'account/already_login') {
	$this->load->view($contant_view);
}else{
	// $this->load->view('side_bar');
	$this->load->view('header');
	$this->load->view($contant_view);
	$this->load->view('footer');
}