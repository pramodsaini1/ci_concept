<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cookie extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
        $this->load->database();
        $this->load->helper("url");
        $this->load->model("login");
        $this->load->helper("cookie");
        $this->load->library("session");
    }
    public function index(){
        $this->load->view("login.php");
    }
    public function submit(){
        $email=$this->input->post("email");
        $pass=md5($this->input->post("pass"));
        if($this->login->check($email,$pass)){
            set_cookie("login",$email,3600*24);
            $this->session->set_userdata($email,$pass);
            redirect(base_url()."index.php/cookie/profile");
        }
        else{

        }
    }
    public function profile(){
        $email=get_cookie("login");
        $sess=$this->session->userdata($email);
        if(isset($email) && isset($sess)){
            $recd["rec"]=$this->login->display($email);
            $this->load->view("Dashboard.php",$recd);
        }
        else{
            redirect(base_url()."index.php/cookie/index");
        }
    }
    public function logout(){
        $email=get_cookie("login");
        delete_cookie("login");
        $this->session->unset_userdata($email);
        redirect(base_url()."index.php/cookie/index");
    }


}