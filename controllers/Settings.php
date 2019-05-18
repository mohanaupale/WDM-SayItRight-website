<?php class Settings extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->library('session');
    //Codeigniter : Write Less Do More
    	$this->load->helper('url');


  }

  function index()
  {
    $role_id = $this->session->userdata('role_id');
    $fname = $this->session->userdata('Fname');
    $email = $this->session->userdata('email');
    $Lname = $this->session->userdata('Lname');
    $this->load->model('settings_model');
    $data['result'] = $this->settings_model->load_user_data($role_id);
    $this->load->view('pages/settings',$data);
  }

  public function validateFields()
  {
    $role_id = $this->session->userdata('role_id');
    $fname = $this->session->userdata('Fname');
    $email = $this->session->userdata('email');
    $Lname = $this->session->userdata('Lname');
    echo "inside validate";
    // $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $username =      $this->input->post("email");
    $password =		 $this->input->post("pass");
    $school =  $this->input->post("school");
    print_r($school);

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');
    //|matches[passconf]|min_length[8]|alpha_numeric|callback_password_check');

    if($this->form_validation->run()){
      // echo "true";
      $this->load->model('settings_model');
      $this->settings_model->update_user_info($role_id,$school);

          //$this->session->set_userdata($newdata);
          redirect('Settings');
}
else{
    $message = 'Update unsuccessful!';
  print_r($message);
}
}
}

 ?>
