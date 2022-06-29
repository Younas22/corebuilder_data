<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*////////////autotyper_accuracy_update//////////*/
if (!function_exists('autotyper_accuracy_update')){
      function autotyper_accuracy_update($accuracy_type, $autotyper_val,$project_id,$configure_p_id){
         $CI =& get_instance();

//first
         if ($accuracy_type == 72) {
            if ($autotyper_val == 49) {
                $CI->db->set('autotyper_val',0);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }else{
                $CI->db->set('autotyper_val','autotyper_val+'.(int)1, FALSE);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }

            if ($autotyper_val ==7) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 15 && $autotyper_val <=16) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 24 && $autotyper_val <=26) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 34 && $autotyper_val <=37) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 45 && $autotyper_val <=49) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }
         } 
//End first



//2nd
         if ($accuracy_type == 82) {
            if ($autotyper_val == 85) {
                $CI->db->set('autotyper_val',0);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }else{
                $CI->db->set('autotyper_val','autotyper_val+'.(int)1, FALSE);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }

            if ($autotyper_val ==15) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 30 && $autotyper_val <=31) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 46 && $autotyper_val <=48) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 63 && $autotyper_val <=66) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 81 && $autotyper_val <=85) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }
         }
//End 2nd


//3rd
         if ($accuracy_type == 86) {
            if ($autotyper_val == 115) {
                $CI->db->set('autotyper_val',0);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }else{
                $CI->db->set('autotyper_val','autotyper_val+'.(int)1, FALSE);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }

            if ($autotyper_val ==20) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 42 && $autotyper_val <=43) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 64 && $autotyper_val <=66) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 87 && $autotyper_val <=90) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 111 && $autotyper_val <=115) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }
         }
//End 3rd

//4th
         if ($accuracy_type == 89) {
            if ($autotyper_val == 140) {
                $CI->db->set('autotyper_val',0);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }else{
                $CI->db->set('autotyper_val','autotyper_val+'.(int)1, FALSE);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }

            if ($autotyper_val ==26) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 52 && $autotyper_val <=53) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 79 && $autotyper_val <=81) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 107 && $autotyper_val <=110) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 136 && $autotyper_val <=140) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }
         }
//End 4th

//5th
         if ($accuracy_type == 91) {
            if ($autotyper_val == 170) {
                $CI->db->set('autotyper_val',0);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }else{
                $CI->db->set('autotyper_val','autotyper_val+'.(int)1, FALSE);
                $CI->db->where('project_id', $configure_p_id);
                $CI->db->update('configure_project');
            }

            if ($autotyper_val == 32) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 64 && $autotyper_val <= 65) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 97 && $autotyper_val <= 99) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 131 && $autotyper_val <= 134) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }

            if ($autotyper_val >= 166 && $autotyper_val <= 170) {
            $CI->db->set('complete_work','complete_work+'.(int)1, FALSE);
            $CI->db->set('wrong','wrong+'.(int)1, FALSE);
            $CI->db->where('p_id', $project_id);
            $res = $CI->db->update('u_working');
            return $res;
            }
         }
//End 5th

       }
}