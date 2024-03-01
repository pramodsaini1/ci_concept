<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Record extends CI_Model{
     public function insert_data($data){
        $this->db->insert("ecb",$data);
     }
     public function get_Record(){
         $query=$this->db->get("ecb");
         return $query->result();
     }
     public function Edit_record($id){
        $this->db->select("*");
		$this->db->from("ecb");
		$this->db->where("sn",$id);
		return $this->db->get()->result();

     }
     public function update_record($data,$id){
        $this->db->where("sn",$id);
        $this->db->update("ecb",$data);
        redirect(base_url());
     }
     public function delete_record($id){
        $this->db->where("sn",$id);
        $this->db->delete("ecb");
        redirect(base_url());
     }
}


?>