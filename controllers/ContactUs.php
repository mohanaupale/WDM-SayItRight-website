<?php class ContactUs extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->library('session');
  }

  function index()
  {
    	$this->load->view('pages/contact_us');
  }
  public function message()
  {
    $fname =      $this->input->post("f_name");
    $lname =		 $this->input->post("l_name");
    $phone=       $this->input->post("phone");
    $msg=         $this->input->post("msg");

    $this->form_validation->set_rules('f_name', 'f_name', 'required');
    $this->form_validation->set_rules('l_name', 'l_name', 'required');
    $this->form_validation->set_rules('phone', 'phone`', 'required');
    $this->form_validation->set_rules('msg', 'msg', 'required');

    if($this->form_validation->run()){
      $this->load->model('contact_us_model');
      $result=$this->contact_us_model->save_info($fname,$lname,$phone,$msg);
      if ($result> 0){
        echo '<script>alert("Signup Successful!");</script>';
        redirect('Login');
      }
      else {
        echo '<script>alert("Signup Unsuccessful! please Try again");</script>';
        redirect(ContactUs);
      }

  }
}
} ?>
