<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Email_tool_M extends CI_Model { 
 
    public function __construct() {
        parent::__construct();
    }
 

    public function get_projects()
    {
        return $this->db->select('*')->order_by('order','asc')->get('projects')->result();
    }
}