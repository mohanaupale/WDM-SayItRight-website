<?php

class Conferences extends CI_Controller{

  public function index(){
    $this->load->library('session');
    //Codeigniter : Write Less Do More
    $role_id = $this->session->userdata('role_id');
    $fname = $this->session->userdata('Fname');
    $email = $this->session->userdata('email');
    $Lname = $this->session->userdata('Lname');

    $this->load->model('conferences_model');
    $data['result'] = $this->conferences_model->load_events();
    //print_r($data);
    $data['myevents'] = $this->conferences_model->my_events($role_id);
    //print_r($data);

    $this->load->view('pages/conferences',$data);
    }
    public function add_conf()
    {
        $role_id = $this->session->userdata('role_id');
        //print_r($role_id);
        $E_ID = $this->input->post('E_ID');
        //print_r($E_ID);
         $this->load->model('events_model');
         $result = $this->events_model->insert_myevents($role_id,$E_ID);
         if ($result>0){
           redirect(Events);
         }
         else{
           echo "<script>alert('Action Unsuccessful!')</script>";
         }
    }
} ?>
