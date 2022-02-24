<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 /*/////////////dd///////////*/
if (!function_exists('dd')){
      function dd($data){
         echo "<pre>";
         print_r($data);
         exit();
       }
}


/*////////////profile//////////*/
if (!function_exists('profile')){
      function profile(){
         $CI =& get_instance();
         $profile_id = $CI->session->userdata('logged_in')->id;
         $CI =& get_instance();
         $CI->db->where('id', $profile_id);
         $query = $CI->db->get('users')->row();
         return $query;
       }
}
 


if (!function_exists('current_utc_date_time')){
   function current_utc_date_time(){
         $dateTime = gmdate("Y-m-d\TH:i:s\Z");;
         return $dateTime;
       }
   }


if (!function_exists('pass_generate')){
   function pass_generate(){
      $length = 6;
    $characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
   }
}


/*get_company_created_at*/
if (!function_exists('get_company_created_at')){
      function get_company_created_at(){
         $CI =& get_instance();
         $company_id = $CI->session->userdata('logged_in')->id;
         $CI->db->where('id', $company_id);
         $get_company_created_at = $CI->db->get('users')->row();
         return $get_company_created_at->created_at;
    }
}
// end

/*check_company_profile is complete or not*/
if (!function_exists('check_company_profile')){
      function check_company_profile(){
         $CI =& get_instance();
         $profile_id = $CI->session->userdata('logged_in')->id;
         $CI->db->where('id', $profile_id);
         $query = $CI->db->get('users')->row();

         /*check compamy data is complete or not*/
         if (empty($query->user_phone)) {
             return 0;
         }if (empty($query->manager_name)) {
             return 0;
         }if (empty($query->company_logo) && empty($query->company_website)) {
             return 'Please add Company Logo and Company Website';
         }if (empty($query->company_name)) {
             return 0;
         }
         if (empty($query->company_website)) {
             return 'company_website';
         }
         if (empty($query->company_logo)) {
             return 'company_logo';
         }
         else{
            return 'Company profile is complete';
         }
    }
}

/*user_active_projects*/
if (!function_exists('user_active_projects')){
      function user_active_projects(){
         $CI =& get_instance();
         $user_id = $CI->session->userdata('logged_in')->id;
         return $CI->db->select('
            u_projects.id as project_id,
            u_id,
            p_id,
            p_type,
            font,
            quantity,
            start_date,
            end_date,
            projects.projects_title
            ')
        ->from('u_projects')
        ->where('u_projects.u_id',$user_id)
        ->join('projects','u_projects.p_id = projects.id')
        ->get()->result();
    }
}


/*get_user_active_projects*/
if (!function_exists('get_user_active_projects')){
      function get_user_active_projects($projects_title){
         $CI =& get_instance();
         $user_id = $CI->session->userdata('logged_in')->id;
         return $CI->db->select('
            u_projects.id as project_id,
            u_id,
            p_id,
            p_type,
            font,
            quantity,
            start_date,
            end_date,
            projects.projects_title
            ')
        ->from('u_projects')
        ->where('u_projects.u_id',$user_id)
        ->where('projects.projects_title',$projects_title)
        ->join('projects','u_projects.p_id = projects.id')
        ->get()->row();
    }
}
// end get_user_active_projects

/*letest_projects_title*/
if (!function_exists('letest_projects_title')){
      function letest_projects_title($user_id){
         $CI =& get_instance();
         return $CI->db->select('
            u_projects.id as project_id,
            u_id,
            p_id,
            p_type,
            font,
            quantity,
            start_date,
            end_date,
            projects.projects_title
            ')
        ->from('u_projects')
        ->order_by('u_projects.id','desc')
        ->where('u_projects.u_id',$user_id)
        ->join('projects','u_projects.p_id = projects.id')
        ->get()->row();
    }
}
// end letest_projects_title

/*get_user_project_QTY*/
if (!function_exists('get_user_project_QTY')){
      function get_user_project_QTY($projects_id){
         $CI =& get_instance();
         $user_id = $CI->session->userdata('logged_in')->id;
        return $CI->db->select('*')
        ->where('u_id',$user_id)
        ->where('p_id',$projects_id)
        ->get('u_projects')->num_rows();
    }
}
// end get_user_project_QTY

/*accuracy_report*/
if (!function_exists('accuracy_report')){
      function accuracy_report($p_id_accuracy_report){
         $CI =& get_instance();
         $get_qty = $CI->db->select('quantity')
        ->from('u_projects')
        ->where('u_projects.id',$p_id_accuracy_report)
        // ->where('u_projects.u_id',$user_id)
        ->get()->row();

        $get_u_working = $CI->db->select()
        ->from('u_working')
        ->where('u_working.p_id',$p_id_accuracy_report)
        ->get()->row();

        $true_work_qty = $get_u_working->_right;
        $total_work_qty = $get_qty->quantity;
        $percentage =  $true_work_qty/$total_work_qty*100;
        return number_format((float)$percentage, 2, '.', '');
    }
}



/*accuracy_report*/
if (!function_exists('project_check_dedline')){
     function project_check_dedline($project_id)
    {
        $CI =& get_instance();
        $get_random_contant_img = $CI->db->
         select()
        ->from('u_projects')
        ->where('u_projects.id',$project_id)
        ->get()->row();

        $get_complete_quantity = $CI->db->
         select()
        ->from('u_working')
        ->where('u_working.p_id',$project_id)
        ->get()->row();

        $complete_quantity = $get_complete_quantity->complete_work;

        $date = new DateTime("now", new DateTimeZone('Asia/Karachi'));
        $today = $date->format('Y-m-d H:i:s');
        $end_date = $get_random_contant_img->end_date;
        $actual_quantity = $get_random_contant_img->quantity;
        $project_type = $get_random_contant_img->p_type;

        $today_time = strtotime($today);
        $expire_time = strtotime($end_date);

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
    }


/*////////////total_user_company//////////*/
if (!function_exists('total_user_company')){
      function total_user_company($company_id){
         $CI =& get_instance();
         return $CI->db->select('*')
         ->where('company_id',$company_id)
         ->where('user_type !=','admin')
         ->get('users')->num_rows();
       }
}

/*////////////d_user_company//////////*/
if (!function_exists('d_user_company')){
      function d_user_company($company_id){
         $CI =& get_instance();
         return $CI->db->select('*')
         ->where('downloaded',1)
         ->where('company_id',$company_id)
         ->where('user_type !=','admin')
         ->get('users')->num_rows();
       }
}

/*////////////n_user_company//////////*/
if (!function_exists('n_user_company')){
      function n_user_company($company_id){
         $CI =& get_instance();
         return $CI->db->select('*')
         ->where('downloaded',0)
         ->where('company_id',$company_id)
         ->where('user_type !=','admin')
         ->get('users')->num_rows();
       }
}

/*////////////active_font//////////*/
if (!function_exists('active_font')){
      function active_font($p_id){
         $CI =& get_instance();
         $font  = $CI->db->select('*')
         ->where('id',$p_id)
         ->get('u_projects')->row();
         return array($font->font,$font->p_type);
       }
}

/*////////////check_user_status//////////*/
if (!function_exists('check_login_status')){
      function check_login_status($user_id){
         $CI =& get_instance();
         $login_status  = $CI->db->select('login_status')
         ->where('id',$user_id)
         ->get('users')->row();
         return $login_status->login_status;
       }
}

/*////////////check_user_status//////////*/
if (!function_exists('check_theme')){
      function check_theme(){
            $CI =& get_instance();
            $user_type = $CI->session->userdata('logged_in')->user_type;
            if ($user_type == 'admin') {
                $id = $CI->session->userdata('logged_in')->id;
                $theme  = $CI->db->select()
                ->where('id',$id)
                ->get('users')->row();
                return $theme->theme;

            }if ($user_type == 'company') {
                $id = $CI->session->userdata('logged_in')->id;
                $theme  = $CI->db->select()
                ->where('id',$id)
                ->get('users')->row();
                return $theme->theme;

            }if($user_type == 'user'){
                $company_id = $CI->session->userdata('logged_in')->company_id;
                $theme  = $CI->db->select()
                ->where('id',$company_id)
                ->get('users')->row();
                return $theme->theme;
            }
            // return 'blue';

       }
}

}