<?php

class LoginModel_ extends CI_Model {


    public function add_users($data){
        return $this->db->insert('autotyper_users', $data);
    }


    public function check_user($email,$phone){
        $data = $this->db->select()
        ->from('users')
        ->where('user_phone', $phone)
        ->where('user_type', 'user')
        ->get()->row();
        if (!empty($data)) {
            return $data;
        }else{
        $data = $this->db->select()
        ->from('users')
        ->where('company_email', $email)
        ->where('user_type', 'user')
        ->get()->row();
            return $data;
        }
    }

    public function get_user_project($project_id){
        return $this->db->select()
        ->from('projects')
        ->where('id',$project_id)
        ->get()->row();
    }


    public function checkLogin($email, $password) {

        // echo $email. $password; exit();
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('autotyper_users')->row();
        // echo $query; exit();
        if (!empty($query)){return $query;}
        else{
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('autotyper_users')->row();
            if (!empty($query)) {
                return $query;
            }else{
                return 0;
            }
        }
    }


}
