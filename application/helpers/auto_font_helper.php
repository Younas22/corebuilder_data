<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 /*/////////////auto_font///////////*/
if (!function_exists('auto_font')){
      function auto_font($total_entry,$p_id,$get_projects_title){

        //Target 250 Captcha
        //Non Target 250 Captcha
        if ($get_projects_title == 'Captcha') {
            $CI =& get_instance();
            $u_projects = $CI->db
            ->from('u_projects')
            ->where('id', $p_id)
            ->get()->row();

            // $main_loop = 101;
            // $change_font_counting = 250;
            // $inner_loop = 11;
             
                $main_loop = 100;
                $change_font_counting = 5;
                $inner_loop = 11;
                $count = 0;
                for ($i=1; $i < $main_loop; $i++) {
                  for ($b=1; $b < $inner_loop; $b++) {
                    if ($total_entry < $change_font_counting && $count == 0) 
                    {
                      $number =$b;
                      update_captcha_font($number,$p_id);
                      $count++;
                    }
                  $change_font_counting = $change_font_counting+5;
                  }
                }
        }

        return true;
       }
}


/*////////////update_captcha_font//////////*/
if (!function_exists('update_captcha_font')){
      function update_captcha_font($number,$p_id){
        $CI =& get_instance();
        $new_font = $CI->db
        ->from('all_font')
        ->where('order', $number)
        ->get()->row();
        $update_font = $CI->db
        ->set('font',$new_font->font_name)
        ->where('id', $p_id)
        ->update('u_projects');
        return true;
       }
}