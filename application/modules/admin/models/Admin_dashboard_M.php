<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_dashboard_M extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }


    public function get_projects()
    {
        return $this->db->select('*')->get('projects')->result();
    }


    public function projects()
    {
        return $this->db->select('*')
        ->order_by('id','asc')
        ->limit(3)
        ->get('projects')
        ->result();
    }

    public function get_images_folder($id,$p_id)
    {
        return $this->db->select('*')
        ->where('folder_no',$id)
        ->where('p_id',$p_id)
        ->get('project_imgs')->result();
    }

    public function profile($admin_id)
    {
        return $this->db->select('*')
        ->where('id',$admin_id)
        ->get('users')->row();
    }

    public function get_agency($agency_id)
    {
        return $this->db->select('*')
        ->where('id',$agency_id)
        ->get('users')->row();
    }

    public function export_all_new_users()
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status,u_projects.downloaded_status,p_type,u_projects.id as progress_bar_id,projects.projects_title')
        ->from('users')
        ->order_by('users.id',"desc")
        ->where('u_projects.downloaded_status',0)
        ->where('user_type !=','admin')
        ->join('u_projects', 'users.id = u_projects.u_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();
    }

    public function count_downloaded()
    {
        return $this->db->select('*')->where('downloaded',1)->where('user_type !=','admin')->get('users')->num_rows();
    }

    public function count_new_users()
    {
        return $this->db->select('*')->where('downloaded',0)->where('user_type !=','admin')->get('users')->num_rows();
    }

    public function count_users()
    {
        return $this->db->select('*')->where('user_type','user')->get('users')->num_rows();
    }

        public function count_agencies()
    {
        return $this->db->select('*')
        ->where('user_type','company')
        ->get('users')->num_rows();
    }


    public function letest_agencies($limit)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id',"desc");
        $this->db->where('user_type',"company");
        $this->db->limit($limit);
        $letest_agencies = $this->db->get()->result();
        return $letest_agencies;
    }

    public function get_count()
    {
        return $this->db->select('*')->where('folder_no !=',null)->get('project_imgs')->num_rows();
    }

        public function get_project_images($limit, $offset, $project_id)
    {
        $this->db->select('project_imgs.*');
        $this->db->order_by('id','desc');
        if ($project_id && $project_id != 'select project type') {
            $array = array('project_imgs.p_id' => $project_id, 'folder_no' => null);
            $this->db->where($array);
        }
        $this->db->where('folder_no !=',null);
        $this->db->from('project_imgs');
        $this->db->limit($limit, $offset);
        return $this->db->get()->result();
    }


    /************all_users data*********/
    public function all_users($limit, $offset,$admin_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('id !=',$admin_id)
        // ->join('u_projects', 'users.id = u_projects.u_id','right')
        // ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
        
    }

        public function total_users($admin_id)
    {
        return $this->db->select()
        ->where('id !=',$admin_id)
        ->get('users')->num_rows();
    }

        public function get_users_search($search,$admin_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password')
        ->from('users')
        ->where('id !=',$admin_id)
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->get()->result();
    }

    /************all-agencies data*********/
    public function all_agencies($limit, $offset)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status,custom_terms')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('user_type','company')
        // ->join('u_projects', 'users.id = u_projects.u_id','right')
        // ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
        
    }

        public function total_agencies()
    {
        return $this->db->select()
        ->where('user_type','company')
        ->get('users')
        ->num_rows();
    }

        public function get_agencies_search($search)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password')
        ->from('users')
        ->where('user_type','company')
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->get()->result();
    }

        /************downloaded_users data*********/
    public function all_downloaded_users($limit, $offset,$d_status)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status,u_projects.downloaded_status,u_projects.id as progress_bar_id,p_type,projects.projects_title')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('u_projects.downloaded_status',$d_status)
        ->where('user_type !=','admin')
        ->join('u_projects', 'users.id = u_projects.u_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();
        
    }

        public function total_downloaded_users($d_status)
    {
        return $this->db->select()
        ->where('downloaded',$d_status)
        ->where('user_type !=','admin')
        ->get('users')->num_rows();
    }

        public function get_downloaded_users_search($search,$d_status)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,u_projects.downloaded_status,p_type,u_projects.id as progress_bar_id,projects.projects_title')
        ->from('users')
        ->where('u_projects.downloaded_status',$d_status)
        ->where('user_type !=','admin')
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->join('u_projects', 'users.id = u_projects.u_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();
    }

        /************all_new_users data*********/
    public function all_new_users($limit, $offset,$d_status)
    {
        $all_new_users = $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status,u_projects.downloaded_status,p_type,u_projects.id as progress_bar_id,projects.projects_title')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('u_projects.downloaded_status',$d_status)
        ->where('user_type !=','admin')
        ->join('u_projects', 'users.id = u_projects.u_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();

        $all_new_users_arr = [];
        foreach ($all_new_users as $key) {
            if (progress_bar($key->progress_bar_id) >= 30.00){
                array_push($all_new_users_arr,array(
                    'users_id'=>$key->users_id,
                    'first_name'=>$key->first_name,
                    'company_email'=>$key->company_email,
                    'user_phone'=>$key->user_phone,
                    'decript_password'=>$key->decript_password,
                    'user_status'=>$key->user_status,
                    'downloaded_status'=>$key->downloaded_status,
                    'p_type'=>$key->p_type,
                    'progress_bar_id'=>$key->progress_bar_id,
                    'projects_title'=>$key->projects_title
                ));
            }
        }

        return $all_new_users_arr;


        
    }

        public function total_new_users($d_status)
    {
        return $this->db->select()
        ->where('downloaded',$d_status)
        ->where('user_type !=','admin')
        ->get('users')->num_rows();
    }

        public function get_new_users_search($search,$d_status)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,u_projects.downloaded_status,p_type,u_projects.id as progress_bar_id,projects.projects_title')
        ->from('users')
        ->where('u_projects.downloaded_status',$d_status)
        ->where('user_type !=','admin')
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->join('u_projects', 'users.id = u_projects.u_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();
    }



/****//////////////********agency_all_users data*********////////////////
    public function agency_all_users($limit, $offset,$agency_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('users.company_id',$agency_id)
        // ->join('u_projects', 'users.id = u_projects.u_id','right')
        // ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
        
    }

        public function total_agencies_user($agency_id)
    {
        return $this->db->select()
        ->where('company_id',$agency_id)
        ->get('users')->num_rows();
    }

        public function get_agencies_user_search($search,$agency_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password')
        ->from('users')
        ->where('company_id',$agency_id)
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->get()->result();
    }


    /************agency downloaded_users data*********/
    public function all_agencyD_users($limit, $offset,$d_status,$agency_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('downloaded',$d_status)
        ->where('company_id',$agency_id)
        // ->join('u_projects', 'users.id = u_projects.u_id','right')
        // ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
        
    }

        public function total_agency_d_users($d_status,$agency_id)
    {
        return $this->db->select()
        ->where('downloaded',$d_status)
        ->where('company_id',$agency_id)
        ->get('users')->num_rows();
    }

        public function get_agencyD_users_search($search,$d_status,$agency_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password')
        ->from('users')
        ->where('downloaded',$d_status)
        ->where('company_id',$agency_id)
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->get()->result();
    }

            /************all_new_users data*********/
        public function all_agency_new_users($limit, $offset,$d_status,$agency_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,user_status')
        ->from('users')
        ->order_by('users.id',"desc")
        ->limit($limit, $offset)
        ->where('downloaded',$d_status)
        ->where('company_id',$agency_id)
        // ->join('u_projects', 'users.id = u_projects.u_id','right')
        // ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
        
    }

        public function total_agency_new_users($d_status,$agency_id)
    {
        return $this->db->select()
        ->where('downloaded',$d_status)
        ->where('company_id',$agency_id)
        ->get('users')->num_rows();
    }

        public function get_agency_new_users_search($search,$d_status,$agency_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password')
        ->from('users')
        ->where('downloaded',$d_status)
        ->where('company_id',$agency_id)
        ->order_by('users.id',"desc")
        ->group_start()
        ->like('first_name',$search)
        ->or_like('user_phone', $search)
        ->or_like('company_email', $search)
        ->group_end()
        ->get()->result();
    }
}

/* End of file Brands_model.php */
/* Location: ./application/modules/admin/models/Brands_model.php */