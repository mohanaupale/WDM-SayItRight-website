<?php
class MyEvents extends CI_Controller{

  public function index(){
    $this->load->library('session');
    //Codeigniter : Write Less Do More
    $role_id = $this->session->userdata('role_id');
    $fname = $this->session->userdata('Fname');
    $email = $this->session->userdata('email');
    $Lname = $this->session->userdata('Lname');

    $this->load->model('my_events_model');
      $data['result'] = $this->my_events_model->load_events();
    $data['MyEvent'] = $this->my_events_model->my_events($role_id);
    //print_r($data);
    // print_r($data);
    $this->load->view('pages/myevents',$data);

    }

} ?>
