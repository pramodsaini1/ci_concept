<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
      
	 public function __construct(){
		parent:: __construct();
		$this->load->helper("form");
		$this->load->dataBase();
	 }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function submit(){
		 $data=array(
			"sn"=>$this->input->post("roll"),
			"name"=>$this->input->post("user"),
			"avgr"=>$this->input->post("avg")
		 );
		 $this->db->insert("demo",$data);
		 $msg["message"]="Record Inserted";
		 $this->load->view("Welcome_message",$msg);
	}
}
