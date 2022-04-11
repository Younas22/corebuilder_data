<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_dashboard_M','admin_dash');
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
		// dd(profile());
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/dashboard';
		/*home email*/
		$data['count_users'] = $this->admin_dash->count_users();
		$data['count_agencies'] = $this->admin_dash->count_agencies();
		$data['count_downloaded'] = $this->admin_dash->count_downloaded();
		$data['count_new_users'] = $this->admin_dash->count_new_users();
		$data['letest_agencies'] = $this->admin_dash->letest_agencies($limit=8);
		$data['get_projects'] = $this->admin_dash->get_projects();
		$this->template->template($data);
	}



	public function profile()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/profile';
		$data['action_type'] = base_url('admin/update/profile');
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}



	/*update profile*/
	public function update_profile()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		if (!empty($_FILES['profile_img']['name'])) {
        $config['upload_path'] = './assets/img/profile';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $profile_img = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', 
    	$_FILES['profile_img']['name']);
	    $config['file_name'] = $profile_img;
        $this->load->library('upload', $config);
        $this->upload->do_upload('profile_img');
    	}else{$profile_img = $this->input->post('old_profile_img');}
    	$profile_data =  [
    		'first_name'=>$this->input->post('first_name'),
    		'last_name'=>$this->input->post('last_name'),
    		'user_phone'=>$this->input->post('user_phone'),
    		'password'=> sha1($this->input->post('password')),
    		'decript_password'=>  $this->input->post('decript_password'),
    		'theme'=>$this->input->post('theme'),
    		'profile_img'=>$profile_img
    	];
    	// dd($profile_data);
        $this->db->where('id',$admin_id);
        $updated = $this->db->update('users',$profile_data);
        if ($updated) {
        	redirect('admin/profile');
        }
	}


/*project-images*/
public function project_images()
{


    $config = array();
    $config["base_url"] = base_url() . "admin/Admin_dashboard/project_images";
    $config["total_rows"] = $this->admin_dash->get_count();
    $config["per_page"] = 14;
    $config["uri_segment"] = 4;
        // Bootstrap 4, work very fine.
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $data["links"] = $this->pagination->create_links();
		$data['class'] = 'show';
		$project_id = $this->input->get('project_id');
		$data['get_project_images'] = $this->admin_dash->get_project_images($config["per_page"], $page, $project_id);
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'project-images';
		$data['title'] = 'Project images';
		$data['contant_view'] = 'admin/project_images';
		$data['action_type'] = base_url('admin/update/profile');
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$data['projects'] = $this->admin_dash->projects();
		$this->template->template($data);
}
/*end project-images*/

	//add-project-images
	public function add_project_images()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/add-project-images';
		$data['action_type'] = base_url('admin/update/profile');
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$data['projects'] = $this->admin_dash->projects();
		$this->template->template($data);
	}
/*end add-project-images*/


//upload-project-images
	public function upload_project_images()
	{

		  	$data = [];
	      $count = count($_FILES['files']['name']);
	      $inlineCheckbox1 = $this->input->post('inlineCheckbox1');
	      $inlineCheckbox2 = $this->input->post('inlineCheckbox2');
	      $inlineCheckbox3 = $this->input->post('inlineCheckbox3');
	      $inlineCheckbox4 = $this->input->post('inlineCheckbox4');
	      $inlineCheckbox5 = $this->input->post('inlineCheckbox5');
	      $inlineCheckbox6 = $this->input->post('inlineCheckbox6');
	      $project_id = $this->input->post('p_id');
if ($inlineCheckbox1) {
for($i=0;$i<$count;$i++){
if(!empty($_FILES['files']['name'][$i])){
$_FILES['file']['name'] = $_FILES['files']['name'][$i];
$_FILES['file']['type'] = $_FILES['files']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['files']['error'][$i];
$_FILES['file']['size'] = $_FILES['files']['size'][$i];
$config['upload_path'] = './assets/img/project_img/1';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['max_size'] = '5000';
$config['file_name'] = $_FILES['files']['name'][$i];
$this->load->library('upload',$config); 
if($this->upload->do_upload('file')){
$uploadData = $this->upload->data();
$filename = $uploadData['file_name'];
$this->db->insert('project_imgs',array('p_image'=>$filename,'p_id'=>$project_id,'folder_no'=>1));
}}}
	      }if ($inlineCheckbox2) {
for($i=0;$i<$count;$i++){
if(!empty($_FILES['files']['name'][$i])){
$_FILES['file']['name'] = $_FILES['files']['name'][$i];
$_FILES['file']['type'] = $_FILES['files']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['files']['error'][$i];
$_FILES['file']['size'] = $_FILES['files']['size'][$i];
$config['upload_path'] = './assets/img/project_img/2';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['max_size'] = '5000';
$config['file_name'] = $_FILES['files']['name'][$i];
$this->load->library('upload',$config); 
if($this->upload->do_upload('file')){
$uploadData = $this->upload->data();
$filename = $uploadData['file_name'];
$this->db->insert('project_imgs',array('p_image'=>$filename,'p_id'=>$project_id,'folder_no'=>2));
}}}
	      }if ($inlineCheckbox3) {
for($i=0;$i<$count;$i++){
if(!empty($_FILES['files']['name'][$i])){
$_FILES['file']['name'] = $_FILES['files']['name'][$i];
$_FILES['file']['type'] = $_FILES['files']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['files']['error'][$i];
$_FILES['file']['size'] = $_FILES['files']['size'][$i];
$config['upload_path'] = './assets/img/project_img/3';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['max_size'] = '5000';
$config['file_name'] = $_FILES['files']['name'][$i];
$this->load->library('upload',$config); 
if($this->upload->do_upload('file')){
$uploadData = $this->upload->data();
$filename = $uploadData['file_name'];
$this->db->insert('project_imgs',array('p_image'=>$filename,'p_id'=>$project_id,'folder_no'=>3));
}}}
	      }if ($inlineCheckbox4) {
for($i=0;$i<$count;$i++){
if(!empty($_FILES['files']['name'][$i])){
$_FILES['file']['name'] = $_FILES['files']['name'][$i];
$_FILES['file']['type'] = $_FILES['files']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['files']['error'][$i];
$_FILES['file']['size'] = $_FILES['files']['size'][$i];
$config['upload_path'] = './assets/img/project_img/4';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['max_size'] = '5000';
$config['file_name'] = $_FILES['files']['name'][$i];
$this->load->library('upload',$config); 
if($this->upload->do_upload('file')){
$uploadData = $this->upload->data();
$filename = $uploadData['file_name'];
$this->db->insert('project_imgs',array('p_image'=>$filename,'p_id'=>$project_id,'folder_no'=>4));
}}}
	      }if ($inlineCheckbox5) {
for($i=0;$i<$count;$i++){
if(!empty($_FILES['files']['name'][$i])){
$_FILES['file']['name'] = $_FILES['files']['name'][$i];
$_FILES['file']['type'] = $_FILES['files']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['files']['error'][$i];
$_FILES['file']['size'] = $_FILES['files']['size'][$i];
$config['upload_path'] = './assets/img/project_img/5';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['max_size'] = '5000';
$config['file_name'] = $_FILES['files']['name'][$i];
$this->load->library('upload',$config); 
if($this->upload->do_upload('file')){
$uploadData = $this->upload->data();
$filename = $uploadData['file_name'];
$this->db->insert('project_imgs',array('p_image'=>$filename,'p_id'=>$project_id,'folder_no'=>5));
}}}
	      }if ($inlineCheckbox6) {
for($i=0;$i<$count;$i++){
if(!empty($_FILES['files']['name'][$i])){
$_FILES['file']['name'] = $_FILES['files']['name'][$i];
$_FILES['file']['type'] = $_FILES['files']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['files']['error'][$i];
$_FILES['file']['size'] = $_FILES['files']['size'][$i];
$config['upload_path'] = './assets/img/project_img/6';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['max_size'] = '5000';
$config['file_name'] = $_FILES['files']['name'][$i];
$this->load->library('upload',$config); 
if($this->upload->do_upload('file')){
$uploadData = $this->upload->data();
$filename = $uploadData['file_name'];
$this->db->insert('project_imgs',array('p_image'=>$filename,'p_id'=>$project_id,'folder_no'=>6));
}}}
	      }


if(!$inlineCheckbox1 && !$inlineCheckbox2 && !$inlineCheckbox3 
	&& !$inlineCheckbox4 && !$inlineCheckbox5 && !$inlineCheckbox6){
for($i=0;$i<$count;$i++){
if(!empty($_FILES['files']['name'][$i])){
$_FILES['file']['name'] = $_FILES['files']['name'][$i];
$_FILES['file']['type'] = $_FILES['files']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['files']['error'][$i];
$_FILES['file']['size'] = $_FILES['files']['size'][$i];
$config['upload_path'] = './assets/img/project_img/';
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$config['max_size'] = '5000';
$config['file_name'] = $_FILES['files']['name'][$i];
$this->load->library('upload',$config); 
if($this->upload->do_upload('file')){
$uploadData = $this->upload->data();
$filename = $uploadData['file_name'];
$this->db->insert('project_imgs',array('p_image'=>$filename,'p_id'=>$project_id));
}}}
	      }




		// echo "<pre>";
		// print_r();
		// exit();

    $form_val_one = $this->input->post('form_val_one');
    if (!empty($form_val_one)) {
    		$this->db->insert('project_imgs',$this->input->post());
    		redirect ('admin/add-project-images');
    	}

    $num_box_one = $this->input->post('num_box_one');
    if (!empty($num_box_one)) {
    		$this->db->insert('project_imgs',$this->input->post());
    		redirect ('admin/add-project-images');
    	}

    $invoice_one = $this->input->post('invoice_one');
    if (!empty($invoice_one)) {
    		$this->db->insert('project_imgs',$this->input->post());
    		redirect ('admin/add-project-images');
    	}

		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/add-project-images';
		$data['action_type'] = base_url('admin/update/profile');
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$data['projects'] = $this->admin_dash->projects();
		$this->template->template($data);


	}
/*end add-project-images*/

/*delete project img*/
public function project_images_del($p_img_id)
{
$p_images_data = $this->db->where('id',$p_img_id)->get('project_imgs')->row();
if ($p_images_data) {
 	unlink("./assets/img/project_img/".$p_images_data->p_image);
 	$project_images_del = $this->db->where('id',$p_img_id)->delete('project_imgs');
	 		if ($project_images_del) {
	 			  redirect('admin/project-images');
	 		}
	 }
}
/*end delete project img*/

/*read file*/
	public function readfile()
	{
		// echo './assets/img/project_img/unnamed.png'

		// $myfile = fopen("./assets/img/project_img/unnamed.png", "r") or die("Unable to open file!");
		// echo fread($myfile,filesize("./assets/img/project_img/unnamed.png"));
		// fclose($myfile);

		$im = file_get_contents("./assets/img/project_img/unnamed.png");
		header("Content-type: image/png");
		echo $im;

	}
/*end read file*/



public function images_folder($id,$p_id)
{
	// echo $id; exit();
		$data['url'] = current_url();
		$data['url_title'] = 'folder images';
		$data['title'] = 'folder images';
		$data['contant_view'] = 'admin/images_folder';
		$data['get_images_folder'] = $this->admin_dash->get_images_folder($id,$p_id);
		$this->template->template($data);
}


public function help()
{
		$data['url'] = current_url();
		$data['url_title'] = 'Help';
		$data['title'] = 'Help';
		$data['contant_view'] = 'admin/help';
		$data['get_projects'] = $this->admin_dash->get_projects();
		$this->template->template($data);
}

/*/////////////////////////All Users///////////////////////////*/
	public function all_users()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "admin/Admin_dashboard/all_users";
        $config["total_rows"] = $this->admin_dash->total_users($admin_id);
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
	$data['all_users'] = $this->admin_dash->get_users_search($search,$admin_id);
	}else{
    $data['all_users'] = $this->admin_dash->all_users($config["per_page"], $page,$admin_id);
	}
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['action'] = base_url('admin/all-users');
		$data['contant_view'] = 'admin/all_users';
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}
/*/////////////////////////End All Users///////////////////////////*/


/*/////////////////////////All Users///////////////////////////*/
	public function all_agencies()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "admin/Admin_dashboard/all_agencies";
        $config["total_rows"] = $this->admin_dash->total_agencies();
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
	$data['all_agencies'] = $this->admin_dash->get_agencies_search($search,$admin_id);
	}else{
    $data['all_agencies'] = $this->admin_dash->all_agencies($config["per_page"], $page,$admin_id);
	}
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['contant_view'] = 'admin/all-agencies';
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}
/*/////////////////////////End All Users///////////////////////////*/
	

	/*/////////////////////////All downloaded_users///////////////////////////*/
	public function downloaded_users($d_status)
	{

		// dd('ok'); 
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "admin/Admin_dashboard/downloaded_users/".$d_status;
        $config["total_rows"] = $this->admin_dash->total_downloaded_users($d_status);
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
	$data['downloaded_users'] = $this->admin_dash->get_downloaded_users_search($search,$d_status);
	}else{
    $data['downloaded_users'] = $this->admin_dash->all_downloaded_users($config["per_page"], $page,$d_status);
	}
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['action'] = base_url('admin/downloaded-users/1');
		$data['contant_view'] = 'admin/downloaded_users';
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}
/*/////////////////////////End All Users///////////////////////////*/


/*/////////////////////////All new_users/0///////////////////////////*/
	public function new_users($d_status)
	{

		// dd('ok'); 
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "admin/Admin_dashboard/new_users/".$d_status;
        $config["total_rows"] = $this->admin_dash->total_new_users($d_status);
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
		$data['new_users'] = $this->admin_dash->get_new_users_search($search,$d_status);
	}else{
    	$data['new_users'] = $this->admin_dash->all_new_users($config["per_page"], $page,$d_status);
	}
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['contant_view'] = 'admin/new_users';
		$data['action'] = base_url('admin/new-users/0');
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}
/*/////////////////////////End All Users///////////////////////////*/


/*/////////////////////////agency_all_users///////////////////////////*/
	public function agency_all_users($agency_id)
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "admin/Admin_dashboard/all_agencies/".$agency_id;
        $config["total_rows"] = $this->admin_dash->total_agencies_user($agency_id);
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
        $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
        $data["links"] = $this->pagination->create_links();


		if (!empty($search)) {
			$data['all_users'] = $this->admin_dash->get_agencies_user_search($search,$agency_id);
		}else{
			$data['all_users'] = $this->admin_dash->agency_all_users($config["per_page"], $page,$agency_id);
			// dd($data['all_users']);
		}
		$data['url'] = current_url();
		$data['url_title'] = 'all-users';
		$data['title'] = 'All Users';
		$data['action'] = base_url('admin/agency/all-users/').$agency_id;
		$data['contant_view'] = 'admin/all_users';
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}
/*/////////////////////////End agency_all_users///////////////////////////*/
	

	/*/////////////////////////All downloaded_users///////////////////////////*/
	public function agency_downloaded_users($d_status,$agency_id)
	{

		// dd('ok'); 
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url() . "admin/Admin_dashboard/agency_downloaded_users/".$d_status.'/'.$agency_id;
        $config["total_rows"] = $this->admin_dash->total_agency_d_users($d_status,$agency_id);
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
        $page = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
        $data["links"] = $this->pagination->create_links();


	if (!empty($search)) {
	$data['downloaded_users'] = $this->admin_dash->get_agencyD_users_search($search,$d_status,$agency_id);
	}else{
    $data['downloaded_users'] = $this->admin_dash->all_agencyD_users($config["per_page"], $page,$d_status,$agency_id);
	}
		$data['url'] = current_url();
		$data['url_title'] = 'Downloadeded users';
		$data['title'] = 'Downloadeded users';
		$data['contant_view'] = 'admin/downloaded_users';
		$data['action'] = base_url('admin/agency/downloaded-users/1/').$agency_id;
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}
/*/////////////////////////End All Users///////////////////////////*/


/*/////////////////////////All new_users/0///////////////////////////*/
	public function agency_new_users($d_status,$agency_id)
	{

		// dd('ok'); 
		$admin_id = $this->session->userdata('logged_in')->id;
		$search = $this->input->get('user_searching');
        $config = array();
        $config["base_url"] = base_url()."admin/Admin_dashboard/agency_new_users/".$d_status.'/'.$agency_id;
        $config["total_rows"] = $this->admin_dash->total_agency_new_users($d_status,$agency_id);
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
        $page = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
        $data["links"] = $this->pagination->create_links();


		if (!empty($search)) {
			$data['new_users'] = $this->admin_dash->get_agency_new_users_search($search,$d_status,$agency_id);
		}else{
	    	$data['new_users'] = $this->admin_dash->all_agency_new_users($config["per_page"], $page,$d_status,$agency_id);
		}
		$data['url'] = current_url();
		$data['url_title'] = 'New users';
		$data['title'] = 'New Users';
		$data['contant_view'] = 'admin/new_users';
		$data['action'] = base_url('admin/agency/new-users/0/').$agency_id;
		$data['profile'] = $this->admin_dash->profile($admin_id);
		$this->template->template($data);
	}
/*/////////////////////////End All Users///////////////////////////*/

	public function agency($agency_id)
{
		$data['url'] = current_url();
		$data['url_title'] = 'Agency';
		$data['title'] = 'Agency';
		$data['contant_view'] = 'admin/agency';
		$data['profile'] = $this->admin_dash->get_agency($agency_id);
		$this->template->template($data);
}

/*////////////export data////////////*/
	public function export()
{
		$empInfo = $this->admin_dash->export_all_new_users();
		// dd($empInfo); exit;
    // create file name
        $fileName = 'data-'.time().'.xlsx';
    // load excel library

        $this->load->library('Excel');
        dd($empInfo); exit;

}

/*////////////active document////////////*/
	public function active_document($id)
{
	$custom_terms = $this->db->where('id',$id)->get('users')->row();
	if ($custom_terms->custom_terms == 1) {
		$custom_terms = 0;
	}else{
		$custom_terms = 1;
	}
	$this->db->where('id',$id)->update('users',array('custom_terms'=>$custom_terms));
		redirect($_SERVER['HTTP_REFERER']);
}
/*////////////end export data////////////*/
}
