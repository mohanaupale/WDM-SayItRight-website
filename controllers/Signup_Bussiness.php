<?php class Signup_Bussiness extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('pages/Signup_Bussiness');
  }
  public function create_user()
  {

    $Lname =   $this->input->post("Lname");
     //print_r($Lname);
    $B_type =   $this->input->post("Type_of_Business");
    print_r($B_type);
    $username =  $this->input->post("email");
    $password =	  $this->input->post("pass");
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');
    $this->form_validation->set_rules('Lname', 'Lname', 'required');
    // print_r($this->input->post("Lname"));
    if($this->form_validation->run()){
      echo "true";

      $this->load->model('signup_bussiness_model');
      $result = $this->signup_bussiness_model->create_user($Lname,$B_type,$username,$password);
      if ($result> 0){
        echo '<script>alert("Signup Successful!");</script>';
        redirect('Login');
      }
      else {
        echo '<script>alert("Signup Unsuccessful! please Try again");</script>';
        redirect(Signup_Ind);
      }
    }
  }

}
 ?>
