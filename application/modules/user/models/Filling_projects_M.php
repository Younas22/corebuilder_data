<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Filling_projects_M extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }
     

    public function get_content_writing($project_id)
    {
        return $this->db->
        select(
            'u_projects.p_type,u_projects.id as project_id,start_date,end_date,font,invoice_type,quantity,
            projects.projects_title,u_working._right,wrong,earning,refrash_limit')
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->join('u_working', 'u_projects.id = u_working.p_id')
        ->join('projects', 'u_projects.p_id = projects.id')
        ->get()->row();
    }

    public function get_random_filling_val($project_id)
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
        $today = $date->format('Y-m-d H:i:s');
        $end_date = $get_random_contant_img->end_date;
        $actual_quantity = $get_random_contant_img->quantity;
        $project_type = $get_random_contant_img->p_type;

        $today_time = strtotime($today);
        $expire_time = strtotime($end_date);
        // dd($get_random_contant_img->difficulty);
        if ($project_type == 'Target') {
            if ($expire_time > $today_time) {
                if ($complete_quantity < $actual_quantity) {
                    $this->db->select('*');
                    $this->db->from('project_imgs');
                    $this->db->where('project_imgs.p_id',$get_random_contant_img->p_id);
                    if($get_random_contant_img->p_id == 7 || $get_random_contant_img->p_id == 6){
                    $this->db->where('project_imgs.difficulty',$get_random_contant_img->difficulty);
                    }
                    $random_contant_img = $this->db->get()->result();
                    $one_img = array_rand($random_contant_img,1);
                    return $random_contant_img[$one_img];
                }else{
                    return 0;
                }
            }else{
                return 0;
            }
        }





        else{
            if ($expire_time > $today_time) {
                    $this->db->select('*');
                    $this->db->from('project_imgs');
                    $this->db->where('project_imgs.p_id',$get_random_contant_img->p_id);
                    if($get_random_contant_img->p_id == 7 || $get_random_contant_img->p_id == 6){
                    $this->db->where('project_imgs.difficulty',$get_random_contant_img->difficulty);
                    }
                    $random_contant_img = $this->db->get()->result();
                    
                $one_img = array_rand($random_contant_img,1);
                return $random_contant_img[$one_img];
            }else{
                return 0;
            }
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



    /************submit_content_writing********/
    public function submit_filling($project_id,$p_id,$data,$user_id)
    {
        // return 1;
        // dd($p_id);
        $get_price = $this->db->select()
        ->from('u_projects')
        ->where('u_projects.id',$p_id)
        ->get()->row();

        $earning = $get_price->price;
        
        $get_form_filling = $this->db->
        select('*')
        ->from('project_imgs')
        ->where('project_imgs.id',$project_id)
        ->get()->row();

        if ($get_form_filling->p_id == 7) {
            $get_form_filling_arr = array(
                'num_box_one'=>$get_form_filling->num_box_one,
                'num_box_two'=>$get_form_filling->num_box_two,
                'num_box_three'=>$get_form_filling->num_box_three,
                'num_box_char'=>$get_form_filling->num_box_char,
                'num_box_panch'=>$get_form_filling->num_box_panch,
                'num_box_chay'=>$get_form_filling->num_box_chay,
                'num_box_sat'=>$get_form_filling->num_box_sat,
                'num_box_ath'=>$get_form_filling->num_box_ath,
                'num_box_no'=>$get_form_filling->num_box_no,
                'num_box_ten'=>$get_form_filling->num_box_ten
            );
        }

        if ($get_form_filling->p_id == 5) {
            $get_form_filling_arr = array(
                'form_val_one'=>$get_form_filling->form_val_one,
                'form_val_two'=>$get_form_filling->form_val_two,
                'form_val_three'=>$get_form_filling->form_val_three,
                'form_val_four'=>$get_form_filling->form_val_four,
                'form_val_panch'=>$get_form_filling->form_val_panch,
                'form_val_chay'=>$get_form_filling->form_val_chay,
                'form_val_sat'=>$get_form_filling->form_val_sat,
                'form_val_ath'=>$get_form_filling->form_val_ath,
                'form_val_no'=>$get_form_filling->form_val_no,
                'form_val_ten'=>$get_form_filling->form_val_ten
            );
        }

        if ($project_id == 4) {
            $get_form_filling_arr = array(
                'captcha_val'=>$this->input->post('captcha_word'));
            // dd($get_form_filling_arr);
        }

        if ($get_form_filling->p_id == 6) {
            // $actual_total = 
            // $get_form_filling->q_one*$get_form_filling->invoice_one+
            // $get_form_filling->q_two*$get_form_filling->invoice_two+
            // $get_form_filling->q_three*$get_form_filling->invoice_three+
            // $get_form_filling->q_char*$get_form_filling->invoice_char+
            // $get_form_filling->q_panch*$get_form_filling->invoice_panch+
            // $get_form_filling->q_panch*$get_form_filling->invoice_panch;



            // if ($this->input->post('invoice_type') == 'easy') {
            //     $actual_total = 
            //      intval($get_form_filling->invoice_one)
            //     +intval($get_form_filling->invoice_two)
            //     +intval($get_form_filling->invoice_three)
            //     +intval($get_form_filling->invoice_char)
            //     +intval($get_form_filling->invoice_panch)
            //     +intval($get_form_filling->invoice_chay)
            //     +intval($get_form_filling->invoice_sat)
            //     +intval($get_form_filling->invoice_ath)
            //     +intval($get_form_filling->invoice_no)
            //     +intval($get_form_filling->invoice_ten);
            // }else{
                $actual_total = 
                $get_form_filling->invoice_one
                +$get_form_filling->invoice_two
                +$get_form_filling->invoice_three
                +$get_form_filling->invoice_char
                +$get_form_filling->invoice_panch
                +$get_form_filling->invoice_chay
                +$get_form_filling->invoice_sat
                +$get_form_filling->invoice_ath
                +$get_form_filling->invoice_no
                +$get_form_filling->invoice_ten;
            
            // return $actual_total;
            if ($data==$actual_total) {
            $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $this->db->set('_right','_right+'.(int)1, FALSE);
            $this->db->set('earning','earning+'.$earning, FALSE);
            $this->db->where('p_id', $p_id);
            $res = $this->db->update('u_working');
            if($res){ return TRUE;  }else{  return FALSE; }
            }else{
            $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $this->db->set('wrong','wrong+'.(int)1, FALSE);
            $this->db->where('p_id', $p_id);
            $res = $this->db->update('u_working');
            if($res){ return TRUE; }else{ return FALSE; }
            }
        }

// dd($p_id);
// dd($get_form_filling_arr);


        if (array_diff($data,$get_form_filling_arr) == array_diff($get_form_filling_arr,$data)) {

            $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $this->db->set('_right','_right+'.(int)1, FALSE);
            $this->db->set('earning','earning+'.$earning, FALSE);
            $this->db->where('p_id', $p_id);
            $res = $this->db->update('u_working');
            if($res){ return TRUE;  }else{  return FALSE; }
        }

        if (array_diff($data,$get_form_filling_arr) != array_diff($get_form_filling_arr,$data)) {

            $this->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $this->db->set('wrong','wrong+'.(int)1, FALSE);
            $this->db->where('p_id', $p_id);
            $res = $this->db->update('u_working');
            if($res){ return TRUE; }else{ return FALSE; }
        }
    }
}

/* End of file Brands_model.php */
/* Location: ./application/modules/admin/models/Brands_model.php */