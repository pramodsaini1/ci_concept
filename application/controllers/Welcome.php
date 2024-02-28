<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
      
	 public function __construct(){
		parent:: __construct();
		$this->load->helper("form");
		$this->load->model("Record");
		$this->load->database();
		$this->load->helper("url");
	 }
	public function index()
	{
 		$rec["record"]=$this->Record->get_Record();
		 $this->load->view("Welcome_message",$rec);
	}
	public function submit(){
		 $data=array(
			"sn"=>$this->input->post("roll"),
			"name"=>$this->input->post("user"),
			"avgr"=>$this->input->post("avg")
		 );
		 $this->Record->insert_data($data);
		 
		  
 	}
	public function edit(){
		 $id= $this->uri->segment(3);
		 $recd["rec"]=$this->Record->Edit_record($id);
		 $this->load->view("Edit.php",$recd);

	}
}
