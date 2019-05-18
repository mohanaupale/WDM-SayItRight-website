<?php class Signup_Event extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('pages/signup_event');
  }
  public function create_user()
  {
    $fname =   $this->input->post("Fname");
    // print_r($fname);
    $lname =		 $this->input->post("Lname");
    $username =  $this->input->post("email");
    $password =	  $this->input->post("pass");
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');
    $this->form_validation->set_rules('Fname', 'Fname', 'required');
    print_r($this->input->post("Fname"));
    if($this->form_validation->run()){
      // echo "true";

      $this->load->model('signup_event_model');
      $result = $this->signup_event_model->create_user($fname,$lname,$username,$password);
      if ($result> 0){
        echo '<script>alert("Signup Successful!");</script>';
        redirect('Login');
      }
      else {
        echo '<script>alert("Signup Unsuccessful! please Try again");</script>';
        redirect('Signup_Ind');
      }
    }
  }

} ?>
