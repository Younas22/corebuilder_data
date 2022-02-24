<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_auto_user_M extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }

    public function total_auto_users()
    {
        return $this->db->select()->get('autotyper_users')->num_rows();
    }


        public function auto_users_search($search,$admin_id)
    {
        return $this->db->select()
        ->from('autotyper_users')
        ->order_by('autotyper_users.id',"desc")
        ->group_start()
        ->like('name',$search)
        ->or_like('phone', $search)
        ->or_like('email', $search)
        ->group_end()
        ->get()->result();
    }

        public function all_auto_users($limit, $offset,$admin_id)
    {
        return $this->db->select()
        ->from('autotyper_users')
        ->order_by('autotyper_users.id',"desc")
        ->limit($limit, $offset)
        ->get()->result();
    }

        public function get_projects()
    {
        return $this->db->select('*')
        ->order_by('id','asc')
        ->limit(7)
        ->get('projects')
        ->result();
    }


}