<?php
class Logout extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->library('session');
    //Codeigniter : Write Less Do More
    $this->load->helper('url');
  }

  public function logout(){
    $this->session->sess_destroy();
    $this->load->view('pages/login');
}

} ?>
