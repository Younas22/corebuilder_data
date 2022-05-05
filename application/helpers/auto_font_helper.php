<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
 /*/////////////auto_font///////////*/
if (!function_exists('auto_font')){
      function auto_font($total_entry,$p_id,$get_projects_title){
            $CI =& get_instance();
            $u_projects = $CI->db
            ->from('u_projects')
            ->where('id', $p_id)
            ->get()->row();
        //Target 250 Captcha
        //Non Target 250 Captcha
        if ($get_projects_title == 'Captcha') {
            // $main_loop = 101;
            // $change_font_counting = 250;
            // $inner_loop = 11;
                $main_loop = 100;
                if ($u_projects->p_type == 'Target'){
                $count_val = 250;
                $change_font_counting = 250;
                }else{ $change_font_counting = 250; $count_val = 250;}
                
                $inner_loop = 11;
                $count = 0;
                for ($i=1; $i < $main_loop; $i++) {
                  for ($b=1; $b < $inner_loop; $b++) {
                    if ($total_entry < $change_font_counting && $count == 0) 
                    {
                      $number =$b;
                      update_font_n_difficulty($number,$p_id,$get_projects_title);
                      $count++;
                    }
                  $change_font_counting = $change_font_counting+$count_val;
                  }
                }
        }


            if ($get_projects_title == 'Invoice Calculation') {
            // $main_loop = 101;
            // $change_font_counting = 250;
            // $inner_loop = 11;
                $main_loop = 100;
                if ($u_projects->p_type == 'Target'){
                $count_val = 150;
                $change_font_counting = 150;
                }else{ $change_font_counting = 180; $count_val = 180;}
                $inner_loop = 4;
                $count = 0;
                for ($i=1; $i < $main_loop; $i++) {
                  for ($b=1; $b < $inner_loop; $b++) {
                    if ($total_entry < $change_font_counting && $count == 0) 
                    {
                      $number =$b;
                      update_font_n_difficulty($number,$p_id,$get_projects_title);
                      $count++;
                    }
                  $change_font_counting = $change_font_counting+$count_val;
                  }
                }
        }

            if ($get_projects_title == 'Alpha-Numeric Validation') {
            // $main_loop = 101;
            // $change_font_counting = 250;
            // $inner_loop = 11;
                $main_loop = 100;
                if ($u_projects->p_type == 'Target'){
                $count_val = 110;
                $change_font_counting = 110;
                }else{ $change_font_counting = 100; $count_val = 100;}
                $inner_loop = 4;
                $count = 0;
                for ($i=1; $i < $main_loop; $i++) {
                  for ($b=1; $b < $inner_loop; $b++) {
                    if ($total_entry < $change_font_counting && $count == 0) 
                    {
                      $number =$b;
                      update_font_n_difficulty($number,$p_id,$get_projects_title);
                      $count++;
                    }
                  $change_font_counting = $change_font_counting+$count_val;
                  }
                }
        }

            if ($get_projects_title == 'Form Filling') {
            // $main_loop = 101;
            // $change_font_counting = 250;
            // $inner_loop = 11;
                $main_loop = 100;
                if ($u_projects->p_type == 'Target'){
                $count_val = 80;
                $change_font_counting = 80;
                }else{ $change_font_counting = 150; $count_val = 150;}
                $inner_loop = 4;
                $count = 0;
                for ($i=1; $i < $main_loop; $i++) {
                  for ($b=1; $b < $inner_loop; $b++) {
                    if ($total_entry < $change_font_counting && $count == 0) 
                    {
                      $number =$b;
                      update_font_n_difficulty($number,$p_id,$get_projects_title);
                      $count++;
                    }
                  $change_font_counting = $change_font_counting+$count_val;
                  }
                }
        }

        return true;
       }
}


/*////////////update_font_n_difficulty//////////*/
if (!function_exists('update_font_n_difficulty')){
      function update_font_n_difficulty($number,$p_id,$get_projects_title){
        $CI =& get_instance();
        if ($get_projects_title == 'Captcha') {
            $new_font = $CI->db
            ->from('all_font')
            ->where('order', $number)
            ->get()->row();
            $update_font = $CI->db
            ->set('font',$new_font->font_name)
            ->where('id', $p_id)
            ->update('u_projects');
            return true;
        }else{
            $update_number = $CI->db
            ->set('difficulty',$number)
            ->where('id', $p_id)
            ->update('u_projects');
            return true;
          }

       }
}



/*////////////update_slow_loading//////////*/
if (!function_exists('slow_loading')){
      function slow_loading($pro_id){
        $CI =& get_instance();
        
        $check_val = $CI->db->select('
        u_working.complete_work,
        earning,
        u_projects.p_type,
        projects.projects_title')
        ->from('u_working')
        ->where('u_working.p_id',$pro_id)
        ->join('u_projects','u_working.p_id = u_projects.id')
        ->join('projects','u_projects.p_id = projects.id')
        ->get()->row();
        // return  $check_val->projects_title;

        if ($check_val->projects_title == 'Captcha' ||
            $check_val->projects_title == 'Invoice Calculation'||
            $check_val->projects_title == 'Alpha-Numeric Validation') {
            
            if ($check_val->p_type == 'Target') {
              if ($check_val->complete_work > 950) {
                return 8000;
              }
            }

            if ($check_val->p_type == 'Non Target') {
              if ($check_val->earning > 220) {
                return 8000;
              }
            }
        }




        if ($check_val->projects_title == 'Form Filling') {
            if ($check_val->p_type == 'Target') {
              // if ($check_val->complete_work > 380) {
              if ($check_val->complete_work > 9) {
                return 8000;
              }
            }

            if ($check_val->p_type == 'Non Target') {
              if ($check_val->earning > 220) {
                return 8000;
              }
            }
        }

        return 1000;
     }



     /*////////////check auto font and irritate mode status//////////*/
if (!function_exists('check_auto_status')){
      function check_auto_status($company_id){
        $CI =& get_instance();
        $check_auto_status = $CI->db
            ->from('users')
            ->where('id', $company_id)
            ->get()->row();
            return $check_auto_status;
       }
  }
}