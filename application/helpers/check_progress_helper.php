<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*user_active_projects*/
// if (!function_exists('user_active_projects')){
//       function user_active_projects(){
//          $CI =& get_instance();
//          $user_id = $CI->session->userdata('logged_in')->id;
//          return $CI->db->select('
//             u_projects.id as project_id,
//             u_id,
//             p_id,
//             p_type,
//             font,
//             quantity,
//             start_date,
//             end_date,
//             projects.projects_title
//             ')
//         ->from('u_projects')
//         ->where('u_projects.u_id',$user_id)
//         ->join('projects','u_projects.p_id = projects.id')
//         ->get()->result();
//     }
// }


/*progress_bar*/
if (!function_exists('progress_bar')){
      function progress_bar($p_id_progress_bar){
         $CI =& get_instance();
         $get_qty_type = $CI->db->select('quantity,p_type,p_id')
        ->from('u_projects')
        ->where('u_projects.id',$p_id_progress_bar)
        // ->where('u_projects.u_id',$user_id)
        ->get()->row();

        // dd($get_qty_type);

        $get_u_working = $CI->db->select()
        ->from('u_working')
        ->where('u_working.p_id',$p_id_progress_bar)
        ->get()->row();

        $true_work_qty = $get_u_working->_right;
        $total_work_qty = $get_qty_type->quantity;
        if ($get_qty_type->p_type == 'Target') {
        $percentage =  $true_work_qty/$total_work_qty*100;
        return number_format((float)$percentage, 2, '.', '');
        }else{
            if ($get_qty_type->p_id == 4) {
                $percentage =  $true_work_qty/550*100;
                return number_format((float)$percentage, 2, '.', '');
            }
            if ($get_qty_type->p_id == 5 || $get_qty_type->p_id == 6 || $get_qty_type->p_id == 7) {
                $percentage =  $true_work_qty/175*100;
                return number_format((float)$percentage, 2, '.', '');
            }

        }

        // return $get_qty_type->p_type;
    }
}

