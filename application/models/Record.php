<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Record extends CI_Model{
     public function insert_data($data){
        $this->db->insert("demo",$data);
     }
}


?>