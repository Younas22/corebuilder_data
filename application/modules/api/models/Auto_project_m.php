<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auto_project_m extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }
 
    public function alluser_projects($project_id)
    {
        return $this->db->
        select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,custom_terms_conditions,img_one,img_two,configure_projects,
            projects.projects_title,u_working._right,wrong,earning,users.id as users_id')
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->where('u_projects.terms_conditions_status',1)
        ->join('users', 'u_projects.u_id = users.id')
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->row();
    }


        public function get_all_project($main_project_id,$user_id)
    {
        return $this->db->
        select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,custom_terms_conditions,img_one,img_two,configure_projects,
            projects.projects_title,u_working._right,wrong,earning,users.id as users_id')
        ->from('u_projects')
        ->where('u_projects.p_id',$main_project_id)
        ->where('u_projects.u_id',$user_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->result();
    }


    //configure_project
        public function configure_project($project_id)
    {

        $configure_projects_status = $this->db->set(array('configure_projects'=>1))->where('id',$project_id)->update('u_projects');

        $configure_projects = $this->db->
        select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,terms_conditions_status,custom_terms_conditions,img_one,img_two,configure_projects,
            projects.projects_title,u_working._right,wrong,earning,users.id as users_id')
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->join('users', 'u_projects.u_id = users.id')
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->row();

        if ($configure_projects->p_type == 'Target') {
        $total_qt = $configure_projects->quantity;
        $complete_qt = $configure_projects->_right+$configure_projects->wrong;
        $left_qt = $total_qt-$complete_qt;

        if ($complete_qt == 0) {
            $complete_qt = 1;
        }
        $count = $complete_qt;
        for ($i=0; $i < $left_qt; $i++) { 
            $data = array(
                'core_user_id'=>$configure_projects->users_id,
                'sub_pro_id'=>$configure_projects->project_id,
                'project_type'=>$configure_projects->p_type,
                'entry_number'=>$count
            );
        $configure_project_data = $this->db->insert('autotyper_project',$data);
        $count++;
    }

        }

        return $configure_project_data;

    }


 
    public function submit_enty($project_id,$enty_number)
    {
        $this->db->set('entry_status',2);
        $this->db->where('entry_number', $enty_number);
        $this->db->where('sub_pro_id', $project_id);
        $res = $this->db->update('autotyper_project');
        return $res;
    }


    public function submit_auto_project($project_id)
    {
        $get_price = $this->db->select()
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->get()->row();
        $earning = $get_price->price;

        $get_accuracy_val = $this->db->select()
        ->from('configure_project')
        ->where('project_id',$get_price->p_id)
        ->get()->row();
        // dd($get_accuracy_val);
        $autotyper_val = $get_accuracy_val->autotyper_val;
        $accuracy_type = $get_accuracy_val->accuracy_type;
        $res = autotyper_accuracy_update($accuracy_type, $autotyper_val, $project_id, $get_price->p_id);

        if (empty($res)) {
            $earning = $get_price->price;
            $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $this->db->set('_right','_right+'.(int)1, FALSE);
            $this->db->set('earning','earning+'.$earning, FALSE);
            $this->db->where('p_id', $project_id);
            $res = $this->db->update('u_working');
            return $res;
        }else{
            return $res;
        }


    }

    
    public function check_dedline($project_id)
    {
        $get_random_contant_img = $this->db->
         select()
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->get()->row();
        // return $get_random_contant_img->p_id;
        $get_complete_quantity = $this->db->
         select()
        ->from('u_working')
        ->where('u_working.p_id',$project_id)
        ->get()->row();

        $complete_quantity = $get_complete_quantity->complete_work;
        $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
        // $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
        $today = $date->format('Y-m-d H:i:s');
        $end_date = $get_random_contant_img->end_date;
        $actual_quantity = $get_random_contant_img->quantity;
        $project_type = $get_random_contant_img->p_type;
        $project_end = $get_random_contant_img->end_project;

        $today_time = strtotime($today);
        $expire_time = strtotime($end_date);

if ($project_end == 0) {
    // code...

        if ($project_type == 'Target') {
            if ($expire_time > $today_time) {
                if ($complete_quantity < $actual_quantity) {
                    return 1;
                }else{
                    return 0;
                }
            }else{
                return 0;
            }
        }

        else{
            if ($expire_time > $today_time) {
                return 1;
            }else{
                return 0;
            }
        }
}else{
    return 0;
}

    }

}