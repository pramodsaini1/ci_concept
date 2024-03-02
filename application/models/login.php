<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Model{
      
    public function check($email,$pass){
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("email",$email);
        foreach($this->db->get()->result() as $row){
            if($row->password==$pass){
                return true;
            }
        }
    }
    public function display($email){
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("email",$email);
        return $this->db->get()->result();
    }

}