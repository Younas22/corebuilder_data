<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Company_dashboard_M extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }
 

    public function get_projects()
    {
        return $this->db->select('*')->order_by('order','asc')->get('projects')->result();
    }

    public function get_project_terms($project_id)
    {
        return $this->db->where('id',$project_id)->select('*')->get('projects')->row();
    }

    public function custom_img_qty($company_id,$p_users_id)
    {
        return $this->db
        ->select('project_imgs.id,p_id,p_image,agency_id,project_number,COUNT(project_number) AS total_img', false)
        ->from('project_imgs')
        ->where('agency_id',$company_id)
        ->where('p_id',$p_users_id)
        ->group_by('project_number')
        ->get()->result();

    }


    public function get_images_custom($project_num,$p_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select('*')
        ->where('project_number',$project_num)
        ->where('agency_id',$company_id)
        ->where('p_id',$p_id)
        ->get('project_imgs')->result();
    }

    public function project_number($company_id)
    {
        return $this->db
        ->select('project_imgs.id,p_id,p_image,agency_id,project_number')
        ->where('agency_id',$company_id)
        ->order_by('project_imgs.id',"desc")
        ->limit(1)
        ->get('project_imgs')
        ->row();
    }

    public function get_custom_image($project_id)
    {
        return $this->db
        ->select('project_imgs.id,p_id,p_image')
        ->where('p_id',$project_id)
        ->where('folder_no',null)
        ->where('project_number',null)
        ->get('project_imgs')
        ->result();
    }

    public function user_withdraw()
    {
        // return $this->db->get('withdraw')->num_rows();
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,withdraw.total_withdraw,withdraw.id as withdraw_id,withdraw.created_at,withdraw.withdraw_status,projects.projects_title,u_projects.p_type')
        ->from('withdraw')
        ->where('users.company_id',$company_id)
        ->order_by('withdraw.id',"desc")
        ->limit($limit, $offset)
        ->join('users', 'withdraw.u_id = users.id')
        ->join('u_projects', 'withdraw.up_id = u_projects.id')
        ->join('projects', 'withdraw.p_id = projects.id')
        ->get()->num_rows();
    }

    public function alluser_withdraw($limit, $offset)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,withdraw.total_withdraw,withdraw.id as withdraw_id,withdraw.created_at,withdraw.withdraw_status,projects.projects_title,u_projects.p_type')
        ->from('withdraw')
        ->where('users.company_id',$company_id)
        ->order_by('withdraw.id',"desc")
        ->limit($limit, $offset)
        ->join('users', 'withdraw.u_id = users.id')
        ->join('u_projects', 'withdraw.up_id = u_projects.id')
        ->join('projects', 'withdraw.p_id = projects.id')
        ->get()->result();
    }


    public function get_withdraw_report($withdraw_report)
    {
        return $this->db->select('users.id as users_id,first_name, users.company_email as to_mail ,user_phone,withdraw.total_withdraw,withdraw.id as withdraw_id,withdraw.created_at,withdraw.updated_at,withdraw.withdraw_status,projects.projects_title,u_projects.p_type')
        ->from('withdraw')
        ->where('withdraw.id',$withdraw_report)
        ->join('users', 'withdraw.u_id = users.id')
        ->join('u_projects', 'withdraw.up_id = u_projects.id')
        ->join('projects', 'withdraw.p_id = projects.id')
        ->get()->row();
    }


    public function letest_users($limit)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db
        ->select('*')
        ->where('company_id',$company_id)
        // ->where('login_status !=',0)
        ->order_by('login_status','desc')
        // ->limit($limit)
        ->get('users')
        ->result();
    }
 
    public function p_users($p_users_id,$limit)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->
        select('users.first_name,last_name,company_email,login_status,profile_img, COUNT(users.company_email) AS total_p', false)
        ->from('u_projects')
        ->where('u_projects.p_id',$p_users_id)
        ->where('users.company_id',$company_id)
        ->limit($limit)
        ->group_by('users.company_email')
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->result();

    }
    
    public function profile($company_id)
    {
        return $this->db->select('*')
        ->where('id',$company_id)
        ->get('users')->row();
    }


    public function submit_user($data){
       $this->db->insert('users', $data);
       $insert_id = $this->db->insert_id();
       return  $insert_id;
    }

    public function check_duplicat_project($u_id,$p_id)
    {
        $this->db->where('u_projects.u_id', $u_id);
        $this->db->where('u_projects.p_id', $p_id);
        $check_duplicat_project = $this->db->get('u_projects')->row();
        if (empty($check_duplicat_project)) {
            return 0;
        }else{
            return 1;
        }
    }
    public function submit_project($data){
       $this->db->insert('u_projects', $data);
       $insert_id = $this->db->insert_id();
       return  $insert_id;
    }

    public function submit_project_img($up_id,$folder_number){
        if (!empty($folder_number)) {
            $folder_number = $folder_number;
        }else{
            $folder_number = NULL;
        }

        $folder_img = $this->db->where('folder_no',$folder_number)->get('project_imgs')->result();

        // echo "<pre>"; print_r($folder_img);
        // exit();

        foreach ( $folder_img as $key) {
            $data = array(
                'up_id'=>$up_id,
                'up_data_id'=>$key->id,
                'folder_number'=>$folder_number,
            );
           $this->db->insert('up_data',$data);
        }

       // $insert_id = $this->db->insert_id();
       return  TRUE;
    }

        public function submit_custom_project_img($up_id,$project_number){
        if (!empty($project_number)) {
            $project_number = $project_number;
        }else{
            $project_number = NULL;
        }
$company_id = $this->session->userdata('logged_in')->id;
$project_numbers = $this->db->where('agency_id',$company_id)->where('project_number',$project_number)->get('project_imgs')->result();

        // echo "<pre>"; print_r($folder_img);
        // exit();

        foreach ($project_numbers as $key) {
            $data = array(
                'up_id'=>$up_id,
                'up_data_id'=>$key->id
            );
           $this->db->insert('up_data',$data);
        }

       // $insert_id = $this->db->insert_id();
       return  TRUE;
    }


    public function projects()
    {
        return $this->db->select()->order_by('id','asc')->where('status',1)->get('projects')->result();
    }

    public function get_quantity($p_id)
    {
        return $this->db->select('u_projects.quantity')->where('id',$p_id)->get('u_projects')->row();
    }

    public function project_img($limit, $offset,$select_p_id)
    {
        return $this->db->select('project_imgs.id,p_image,p_status,
            projects.projects_title')
        // ->where_in('p_id',array(1,2,3))
        ->limit($limit, $offset)
        ->where('project_imgs.p_id',$select_p_id)
        ->from('project_imgs') //corrected table name
        ->join('projects', 'project_imgs.p_id = projects.id')
        ->get()->result();


        // echo "<pre>"; print_r($return); exit();
    }

// Plus package
// Basic package
// Pro package
        public function total_img($select_p_id)
    {
        return $this->db->select('*')->where('project_imgs.p_id',$select_p_id)->get('project_imgs')->num_rows();
        // print_r($result->quantity);
        // exit();
    }

        public function p_users_qty($p_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select('users.first_name,last_name,company_email,login_status,profile_img, COUNT(users.company_email) AS total_p', false)
        ->from('u_projects')
        ->where('u_projects.p_id',$p_id)
        ->where('users.company_id',$company_id)
        ->group_by('users.company_email')
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->num_rows();
    }

        public function project_qty($p_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select()
        ->from('u_projects')
        ->where('u_projects.p_id',$p_id)
        ->where('users.company_id',$company_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->num_rows();
    }

        public function p_target_qty($p_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select()
        ->from('u_projects')
        ->where('u_projects.p_id',$p_id)
        ->where('u_projects.p_type','Target')
        ->where('users.company_id',$company_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->num_rows();
    }

        public function p_nontarget_qty($p_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select()
        ->from('u_projects')
        ->where('u_projects.p_id',$p_id)
        ->where('u_projects.p_type','Non Target')
        ->where('users.company_id',$company_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->num_rows();
        
        // return $this->db->select('*')->where('u_projects.p_id',$p_id)->where('u_projects.p_type','Non Target')->get('u_projects')->get('u_projects')->num_rows();
    }



    /************all_users data*********/
    public function all_users($limit, $offset,$company_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status,auto_font')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('company_id',$company_id)
        // ->join('u_projects', 'users.id = u_projects.u_id','right')
        // ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
        
    }
 
        public function total_users($company_id)
    {
        return $this->db->select()
        ->where('company_id',$company_id)
        ->get('users')->num_rows();
    }

 
        public function total_users_documents($company_id)
    {
        $users_documents = array();
        $result = $this->db->select()
        ->where('company_id',$company_id)
        ->get('users')->result();
        foreach ($result as $key) {
            $documents = $this->db->select('u_projects.*,users.first_name')
            ->where('u_id',$key->id)
            ->from('u_projects')
            ->where('u_id',$key->id)
            ->where('terms_conditions_status',2)
            ->join('users', 'u_projects.u_id = users.id')
            ->get()->result();
            array_push($users_documents, $documents);
        }
        // dd($users_documents);
        return $users_documents;
    }

        public function get_users_search($search,$company_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status,auto_font')
        ->from('users')
        ->where('company_id',$company_id)
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->get()->result();
    }
/*projects and earning*/
        public function user_earning($user_id)
    {
        $query = $this->db->select_sum("u_working.earning")
                  ->from("u_working")
                  ->where('u_id',$user_id)
                  ->get();
        return $query->result();
        // dd($query->result());

    }

        public function user_projects($user_id)
    {
        return $this->db->select()
        ->where('u_id',$user_id)
        ->get('u_projects')->num_rows();
    }

        public function qc_report($company_id)
    {
        return $this->db->
        select()
        ->from('u_projects')
        ->where('users.company_id',$company_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->num_rows();
    }
/*end projects and earning*/

    public function view($id)
    {
        $this->db->select('*');
        $this->db->from('msg');
        $this->db->where('id',$id);
        return $this->db->get()->row();
        
    }


    public function alluser_projects($limit, $offset,$user_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,projects_title,u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,invoice_type')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('users.id',$user_id)
        ->join('u_projects', 'users.id = u_projects.u_id','right')
        ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
    }

    public function qc_report_projects($limit, $offset,$company_id)
    {
        return $this->db->select('u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,qc_report_status,report_status_date,report_view_date,report_download_date,report_send_date,custom_terms_conditions,img_one,img_two,img_three,img_four,
            projects.projects_title,u_working._right,wrong,earning,refrash_limit,users.id as users_id,first_name,company_email,user_phone')
        ->from('u_projects')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('u_projects.p_type','Target')
        ->where('u_projects.end_project',1)
        ->where('users.company_id',$company_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();
    }

    public function project_view($project_id)
    {
        // return $this->db->
        // select(
        //     'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,qc_report_status,custom_terms_conditions,img_one,img_two,img_three,img_four,
        //     projects.projects_title,u_working._right,wrong,earning,refrash_limit,users.id as users_id')
        // ->from('u_projects')
        // ->where('u_projects.id',$project_id)
        // ->join('users', 'u_projects.u_id = users.id')
        // ->join('u_working', 'u_projects.id = u_working.p_id')
        // ->join('projects', 'u_projects.p_id = projects.id')
        // ->get()->row();

        return $this->db->select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,custom_terms_conditions,img_one,img_two,img_three,img_four,fname,date_of_birth,aadhar_number,pan_card,bank_name,account_no,IFSC_code,
            projects.projects_title,u_working._right,wrong,earning,refrash_limit,users.id as users_id')
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->row();
    }


    public function project_edit($project_id)
    {
        return $this->db->
        select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,custom_terms_conditions,img_one,img_two,price,
            projects.projects_title,projects.id,u_working._right,wrong,earning,users.id as users_id')
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->row();
    }

    public function update_project($project_id,$data)
    {
        return $this->db->set($data)->where('id',$project_id)->update('u_projects');
    }


    public function folder_1($p_id,$folder_val)
    {
        return $this->db->select('*')->where('project_imgs.p_id',$p_id)->where('project_imgs.folder_no',$folder_val)->get('project_imgs')->num_rows();
    }

        public function folder_2($p_id,$folder_val)
    {
        return $this->db->select('*')->where('project_imgs.p_id',$p_id)->where('project_imgs.folder_no',$folder_val)->get('project_imgs')->num_rows();
    }

        public function folder_3($p_id,$folder_val)
    {
        return $this->db->select('*')->where('project_imgs.p_id',$p_id)->where('project_imgs.folder_no',$folder_val)->get('project_imgs')->num_rows();
    }

        public function folder_4($p_id,$folder_val)
    {
        return $this->db->select('*')->where('project_imgs.p_id',$p_id)->where('project_imgs.folder_no',$folder_val)->get('project_imgs')->num_rows();
    }
        public function folder_5($p_id,$folder_val)
    {
        return $this->db->select('*')->where('project_imgs.p_id',$p_id)->where('project_imgs.folder_no',$folder_val)->get('project_imgs')->num_rows();
    }
        public function folder_6($p_id,$folder_val)
    {
        return $this->db->select('*')->where('project_imgs.p_id',$p_id)->where('project_imgs.folder_no',$folder_val)->get('project_imgs')->num_rows();
    }


        public function p_all_user($limit, $offset,$project_id)
    {
        // dd($project_id);
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status,projects.projects_title')
        ->from('u_projects')
        ->order_by('u_projects.id',"desc")
        ->limit($limit, $offset)
        ->where('u_projects.p_id',$project_id)
        ->where('users.company_id',$company_id)
        ->group_by('users.company_email')
        ->join('users', 'u_projects.u_id = users.id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();
    }
 
        public function p_user($project_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select()
        ->from('u_projects')
        ->where('u_projects.p_id',$project_id)
        ->where('users.company_id',$company_id)
        ->group_by('users.company_email')
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->num_rows();

    }

        public function p_search_user($search,$project_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status')
        ->from('u_projects')
        ->where('u_projects.p_id',$project_id)
        ->where('users.company_id',$company_id)
        ->order_by('u_projects.id',"desc")
        ->group_start()
        ->like('users.first_name',$search)
        ->or_like('users.user_phone', $search)
        ->or_like('users.company_email', $search)
        ->group_end()
        ->join('users', 'u_projects.u_id = users.id')
        ->get()->result();
    }


        public function filling_project($data_type,$project_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;

        if ($data_type == 'target') {
            $data_type = 'Target';
        }

        if ($data_type == 'non-target') {
            $data_type = 'Non Target';
        }
        $this->db->select();
        $this->db->from('u_projects');
        $this->db->where('u_projects.p_id',$project_id);
        $this->db->where('users.company_id',$company_id);
        if ($data_type != 'projects') {
        $this->db->where('u_projects.p_type',$data_type);
        }
        $this->db->join('users', 'u_projects.u_id = users.id');
        return $this->db->get()->num_rows();
    }


    public function all_filling_project($data_type,$limit, $offset,$project_id)
    {
        $company_id = $this->session->userdata('logged_in')->id;
        if ($data_type == 'target') {
            $data_type = 'Target';
        }

        if ($data_type == 'non-target') {
            $data_type = 'Non Target';
        }

        $this->db->select('users.id as users_id,first_name,company_email,profile_img,user_phone,decript_password,projects_title,u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,invoice_type,quantity,u_working._right,wrong,earning,refrash_limit');
        $this->db->from('users');
        $this->db->where('u_projects.p_id',$project_id);
        $this->db->where('users.company_id',$company_id);
        if ($data_type != 'projects') {
        $this->db->where('u_projects.p_type',$data_type);
        }
        $this->db->limit($limit, $offset);
        $this->db->join('u_projects', 'users.id = u_projects.u_id');
        $this->db->join('projects', 'u_projects.p_id = projects.id');
        $this->db->join('u_working', 'u_projects.id = u_working.p_id');
        return $this->db->get()->result();
    }

}

/* End of file Brands_model.php */
/* Location: ./application/modules/admin/models/Brands_model.php */