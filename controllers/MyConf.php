<?php
class MyConf extends CI_Controller{

  public function index(){
    $this->load->library('session');
    //Codeigniter : Write Less Do More
    $role_id = $this->session->userdata('role_id');
    $fname = $this->session->userdata('Fname');
    $email = $this->session->userdata('email');
    $Lname = $this->session->userdata('Lname');

    $this->load->model('my_conf_model');
  //   $data['result'] = $this->my_conf_model->load_events();
  // $data['MyEvent'] =  $this->my_conf_model->my_events($role_id);
    //print_r($data);
    $data['MyEvent'] =  $this->my_conf_model->myconfs_load($role_id);
    

    $this->load->view('pages/myconf',$data);
    }

} ?>
