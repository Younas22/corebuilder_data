<?php

class LoginModel extends CI_Model {


    public function add_user($data){
        return $this->db->insert('users', $data);
    }


    public function checkLogin($email, $password) {

        // echo $email. $password; exit();
        $this->db->where('company_email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users')->row();
        // echo $query; exit();
        if (!empty($query)){return $query;}
        else{
        $this->db->where('user_email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users')->row();
            if (!empty($query)) {
                return $query;
            }else{
                return 0;
            }
        }
    }


}
