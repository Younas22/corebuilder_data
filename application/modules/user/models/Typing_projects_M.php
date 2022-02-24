<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Typing_projects_M extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }
     

    public function get_content_writing($project_id)
    {
        return $this->db->
        select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,quantity,
            projects.projects_title,u_working._right,wrong,earning,refrash_limit')
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->row();
    }

    public function get_random_contant_img($project_id)
    {
        $get_random_contant_img = $this->db->
        select()
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->get()->row();


        // dd($get_random_contant_img->p_id);
        // dd($get_random_contant_img->end_date);


        $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
        $today = $date->format('Y-m-d H:i:s');
        $end_date = $get_random_contant_img->end_date;

        $today_time = strtotime($today);
        $expire_time = strtotime($end_date);

        if ($expire_time > $today_time) {
            

        $random_contant_img = $this->db->
        select('p_image')
        ->from('project_imgs')
        ->where('project_imgs.p_id',$get_random_contant_img->p_id)
        ->get()->result();

        $one_img = array_rand($random_contant_img,1);
        return $random_contant_img[$one_img];
        }

    }


    public function check_dedline($project_id)
    {
        $get_random_contant_img = $this->db->
         select()
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->get()->row();

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

    public function get_up_data($project_id)
    {
        return $this->db->
        select('project_imgs.id as project_img_id,p_image,up_data.id as up_data_id,folder_number')
        ->from('up_data')
        ->where('up_data.up_id',$project_id)
        ->where('up_data.up_status','1')
        ->join('project_imgs', 'up_data.up_data_id = project_imgs.id')
        ->get()->row();
    }

    public function get_image_quantity($project_id)
    {
        return $this->db->select('*')
        ->from('up_data')
        ->where('up_data.up_id',$project_id)
        // ->where('up_data.up_status','1')
        // ->join('project_imgs', 'up_data.up_data_id = project_imgs.id')
        ->get()->num_rows();
    }

    public function get_img_quantity($project_id)
    {
        return $this->db->select('*')
        ->from('up_data')
        ->where('up_data.up_id',$project_id)
        ->where('up_data.up_status','0')
        // ->join('project_imgs', 'up_data.up_data_id = project_imgs.id')
        ->get()->num_rows();
    }

    /************submit_content_writing********/
    public function submit_content_writing($p_id,$up_data_id,$filling_val,$actual_val,$user_id)
    {
        // dd($p_id);
        $get_price = $this->db->select()
        ->from('u_projects')
        ->where('u_projects.id',$p_id)
        ->get()->row();

        $earning = $get_price->price;
        $data = array('up_status'=>0);
        $this->db->where('id', $up_data_id);
        $this->db->update('up_data',$data);
        $text_compare = strcmp($actual_val,$filling_val);

        $u_working_progress=array(
            'u_id'=>$user_id,
            'up_id'=>$p_id,
            'up_id'=>$p_id,
            'upd_id'=>$up_data_id,
            'filling_val'=>$filling_val,
            'actual_val'=>$actual_val
            );
        /*u_working*/
        if ($text_compare != 0) {
            $this->db->insert('u_working_progress',$u_working_progress);
            $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $this->db->set('wrong','wrong+'.(int)1, FALSE);
            $this->db->where('p_id', $p_id);
            $res = $this->db->update('u_working');
            if($res){ return TRUE; }else{ return FALSE; }
        }else{
            $this->db->insert('u_working_progress',$u_working_progress);
            $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $this->db->set('_right','_right+'.(int)1, FALSE);
            $this->db->set('earning','earning+'.$earning, FALSE);
            $this->db->where('p_id', $p_id);
            $res = $this->db->update('u_working');
            if($res){ return TRUE;  }else{  return FALSE; }
        }
        
    }
}

/* End of file Brands_model.php */
/* Location: ./application/modules/admin/models/Brands_model.php */