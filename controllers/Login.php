<?php

class Login extends CI_Controller{

  public function index(){
          $this->load->view('pages/login');
          $this->load->library('session');
      }

      public function view2($page = 'login', $data){
  			if(!file_exists(APPPATH.'views/pages'.$page.'.php')){
  							show_404();//code isgniter function
  							// echo ".$page";
  			}
  			$value['message'] = $data;
   			$this->load->helper('url');
  			// $this->load->view('templates/header');
  			$this->load->view('pages/login',$value);
  			// $this->load->view('templates/footer');


  		}
  public function validateFields()
  {
    // echo "inside validate";
    // $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $username =      $this->input->post("email");
    $password =		 $this->input->post("pass");


    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');
    //|matches[passconf]|min_length[8]|alpha_numeric|callback_password_check');

    if($this->form_validation->run()){
      // echo "true";
      $this->load->model('login_model');
      $data['posts'] = $this->login_model->validateUser($username, $password);


      extract($data);
      print_r($data);

      if(count($data)>0){
          $role_id=$posts[0]->Role_ID;
          $fname=$posts[0]->Fname;
          $lname=$posts[0]->Lname;
          $email=$posts[0]->email;
          $type=$posts[0]->Type;

          $this->load->library('session');
          $newdata = array(
            'role_id' => $role_id,
            'Fname'  => $fname,
            'email' => $email,
            'Lname' => $lname,
            );

          $this->session->set_userdata($newdata);
          redirect('Login_individual');
}
else{
    $message = 'username or password incorrect';
    $this->view2('login',$message);
}
}
}
  public function password_check($str)
			{
   				if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
     				return TRUE;
   				}
   			return FALSE;
			}
      public function logout(){
    $this->load->view('pages/login');
  }
  }

 ?>
