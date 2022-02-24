<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_dashboard_M extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }
    
    public function user_projects($user_id)
    {
        return $this->db->select()
        ->where('u_id',$user_id)
        ->get('u_projects')->num_rows();
    }

        public function user_withdraw($user_id)
    {
        return $this->db->select()
        ->where('u_id',$user_id)
        ->get('withdraw')->num_rows();
    }

    public function get_projects()
    {
        return $this->db->select('*')->get('projects')->result();
    }
    
    public function alluser_projects($limit, $offset,$user_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,decript_password,projects_title,u_projects.p_type,u_projects.id as project_id,start_date,end_date,u_projects.p_id as up_id')
        ->from('users')
        ->order_by('u_projects.id','desc')
        ->limit($limit, $offset)
        ->where('users.id',$user_id)
        ->join('u_projects', 'users.id = u_projects.u_id','right')
        ->join('projects', 'u_projects.p_id = projects.id','right')
        ->get()->result();
    }


    public function alluser_withdraw($limit, $offset,$user_id)
    {
        return $this->db->select('users.id as users_id,first_name,company_email,user_phone,withdraw.total_withdraw,withdraw.id as withdraw_id,withdraw.created_at,withdraw.withdraw_status,projects.projects_title,u_projects.p_type')
        ->from('withdraw')
        ->order_by('withdraw.id',"desc")
        ->limit($limit, $offset)
        ->where('withdraw.u_id',$user_id)
        ->join('users', 'withdraw.u_id = users.id')
        ->join('u_projects', 'withdraw.up_id = u_projects.id')
        ->join('projects', 'withdraw.p_id = projects.id')
        ->get()->result();
    }
    
    public function profile($user_id)
    {
        $return = $this->db->select('*')
        ->where('id',$user_id)
        ->get('users')->result();
        $return_ = $this->db->select('*')
        ->where('id',$return[0]->company_id)
        ->get('users')->result();
        return array_merge($return,$return_);
    }

    public function company_profile($company_id)
    {
        // code...
    }

    public function user_total_projects($user_id)
    {
        return $this->db->select('*')
        ->where('u_id',$user_id)
        ->get('u_projects')->num_rows();
    }

    public function user_earning($user_id)
    {
        $query = $this->db->select_sum("u_working.earning")->select_sum("u_working.withdrawal")
                  ->from("u_working")
                  ->where('u_id',$user_id)
                  ->get();
        return $query->row();
    }
    

    public function project_view($project_id)
    {
        return $this->db->select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,custom_terms_conditions,
            projects.projects_title,u_working._right,wrong,earning,refrash_limit,users.id as users_id')
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->row();
    }



    public function status($status_id,$data)
    {
        return $this->db->where('id',$status_id)->update('msg',$data);
    }

    public function submit_withdraw_request($data)
    {
        $up_id = $this->input->post('u_project_id');
        $p_id = $this->input->post('project_id');
        $withdraw_amount = $this->input->post('withdraw_amount');
        $earning = $this->wallet_balance($up_id);

        $ff =  ltrim($withdraw_amount, "0");
        $intraqam = (int)$ff;
        $arr = str_split($intraqam);
        $ss = array_slice($arr, -2, 1);
        $first = array_values($arr)[0];
        $second_last = $ss[0];
        $last = end($arr);
        $string = substr($intraqam, 0, -2);
        $amount_request = (int)$string.'00';

        if ($withdraw_amount > $earning || $amount_request == 00) {
            return 'this is wrong request! please check yor balnace';
        }

        if ($withdraw_amount < 500) {
            return 'You can send minimum 500 inr withdrawal request!';
        }

         $withdraw = $this->db->insert('withdraw',$data);
            if ($withdraw) {
                // dd($amount_request);
            // $this->db->where('p_id',$up_id);
            // $this->db->set('withdrawal', 'withdrawal +' . $amount_request, FALSE);
            // $update = $this->db->update('u_working');

            $this->db->set('withdrawal', 'withdrawal +' . $amount_request, FALSE);        
            $where = array('u_working.p_id' =>$up_id);
            $this->db->where($where);
            $update = $this->db->update('u_working');
                // dd($update);
            if ($update) {
                return 1;
            }else{
                return 'Something Wrong!';
            }

                
            }
         
    }

    public function wallet_balance($p_id)
    {
        $wallet_balance = $this->db->select()
        ->from('u_working')
        ->where('p_id',$p_id)
        ->get()->row();

        return $wallet_balance->earning-$wallet_balance->withdrawal;
    }

}

/* End of file Brands_model.php */
/* Location: ./application/modules/admin/models/Brands_model.php */