<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {


		function __construct()
	{
		parent:: __construct();
		$this->load->model('LoginModel', 'login');
	} 
	
 
	public function index()
	{
        
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'http://localhost/agp_api/agp_base_url',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => array('base_url' => base_url()),
));

$response = curl_exec($curl);
curl_close($curl);

		if(!empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url() . $this->session->userdata('logged_in')->user_type.'/dashboard');
		}
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'account/signin';
		$this->template->template($data);
	}


//user_login
    public function user_login()
    {
        if(!empty($this->session->userdata('logged_in')))
        {
        return redirect(base_url() . $this->session->userdata('logged_in')->user_type.'/dashboard');
        }
        $data['url'] = current_url();
        $data['url_title'] = 'sign in';
        $data['title'] = 'sign in your account';
        $data['contant_view'] = 'account/user_signin';
        $this->template->template($data);
    }

	public function signup()
	{
		if(!empty($this->session->userdata('logged_in')))
		{
        return redirect(base_url() . $this->session->userdata('logged_in')->user_type.'/dashboard');
		}
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'account/signup';
		$this->template->template($data);
	}

    public function already_login()
    {
        // dd('ok');
        $data['url'] = current_url();
        $data['url_title'] = 'sign in';
        $data['title'] = 'sign in your account';
        $data['contant_view'] = 'account/already_login';
        $this->template->template($data);
    }

	public function doLogin() {
        $email = $this->input->post('email');
        $type = $this->input->post('type');
        $password = sha1($this->input->post('password'));
        $check_login = $this->login->checkLogin($email, $password);

        if ($check_login->user_type != $type && $check_login->user_type != 'admin') {
            $this->session->set_flashdata('msg', 'something wrong!');
            redirect(base_url() . $type.'-login');
        }

        if ($check_login) {
                if ($check_login->user_status == 1) {
                    if ($check_login->login_status > 0) 
                        {
$this->session->set_userdata('login_status',
array('login_status'=>check_login_status($check_login->id),
'id'=>$check_login->id)
);
return redirect(base_url() . 'already_login/'.$check_login->user_type);
// echo "This User Already logged, first You need to logout!"; exit;
                        }else{

$this->session->set_userdata('login_status',
array(
    'login_status'=>rand(),
    'id'=>$check_login->id
));

if ($this->session->userdata('login_status')) {
  /*update login status*/
$this->db->where('users.id',$check_login->id)->update('users',
array('login_status'=> $this->session->userdata('login_status')['login_status']));
/*end update login status*/
}


// $this->db->where('users.id',$login_session->id)->update('users',array('terms_status'=>1));
$this->session->set_userdata('logged_in',$check_login);
$login_session = $this->session->userdata('logged_in');
// dd($this->session->userdata('login_status')['login_status']);
                            /*update login status*/
                            if ($login_session->user_type == $type) {
                                return redirect(base_url().$type.'/dashboard');
                            }

                            if ($login_session->user_type == 'admin') {
                                return redirect(base_url().'admin/dashboard');
                            }else{
                                $this->session->set_flashdata('msg', 'something wrong!');
                                redirect(base_url() . $type.'-login');
                            }

                            // if ($login_session->user_type == 'admin') {
                            // return redirect(base_url().'admin/dashboard');
                            // }if ($login_session->user_type == 'user') {
                            // return redirect(base_url().'user/dashboard');
                            // }
                        }

                }else{
            $this->session->set_flashdata('msg', 'Your Account is disabled!');
            redirect(base_url() . $login_session->user_type.'-login');
              }


        } else {

            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url() . $login_session->user_type.'-login');            
        }
    }


    public function logout($type) {
        // dd($this->session->userdata('login_status'));
        // dd($this->session->userdata('logged_in')->id);
        /*update login status*/
        $login_status = $this->db->where('users.id',$this->session->userdata('login_status')['id'])->update('users',array('login_status'=>0));
        /*update login status*/

        if ($login_status) {
        $this->session->unset_userdata('login_status');
        $this->session->unset_userdata('logged_in');
        redirect(base_url($type.'-login'));
        }

    }


    public function do_register()
    {

        // $this->form_validation->set_rules('company_name', 'Company Name', 'required|min_length[3]');
        // $this->form_validation->set_rules('manager_name', 'Manager Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('company_email', 'Email', 'required|valid_email|is_unique[users.company_email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

      
        if ($this->form_validation->run() == FALSE) {
        	$data['contant_view'] = 'account/signup';
        	$this->template->template($data);
        } else {
            $company_name = $this->input->post('company_name');
            $manager_name = $this->input->post('manager_name');
            $company_email = $this->input->post('company_email');
            $phone = $this->input->post('phone');
            $password = sha1($this->input->post('password'));
            $theme = $this->input->post('theme');
            $decript_password = $this->input->post('password');
            $terms_status = $this->input->post('terms_status');

            $data = [
                'company_name' => $company_name,
                'manager_name' => $manager_name,
                'company_email' => $company_email,
                'user_phone' => $phone,
                'password' => $password,
                'decript_password' => $decript_password,
                'theme' => $theme,
                'user_type' => 'company',
                'terms_status' => $terms_status
            ];
            $insert_data = $this->login->add_user($data);
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register');
                redirect(base_url().$login_session->user_type.'-login');
            }


        }

    }

	
}
