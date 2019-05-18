 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function index()
  {
    $this->form_validation->set_rules('email','Email','required|valid_email');
       $data= $this->input->post('email');

        if($this->form_validation->run()===FALSE){

			   $this->load->view('pages/Home');
         echo "<script>console.log(";
        echo $data;
        echo " );</script>";

		}else{

            $this->home_model->subscribe();
          //  $this->sendEmail($this->input->post('email'));
            redirect('Home');
        }
  }

} ?>
