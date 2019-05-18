<?php /**
 *
 */
class Login_individual extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    //Codeigniter : Write Less Do More

  }
  public function index()
  {
    $role_id = $this->session->userdata('role_id');
    $fname = $this->session->userdata('Fname');
    $email = $this->session->userdata('email');
    $Lname = $this->session->userdata('Lname');
    $this->load->model('login_individual_model');
    $data = $this->login_individual_model->check_Event($role_id);
    //print_r($data['Event_count']);
    $data['total']=$data['event_count']+$data['Conf_count'];
    $this->load->view('pages/Login_individual',$data);
  }
}
 ?>
