<?php
class Buy_From_Us extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
      $this->load->model('buyfromus_model');
      $data['result'] = $this->buyfromus_model->load_products();
      // print_r(sizeof($data['result']));
      $this->load->view('pages/buy_from_us',$data);
  }
} ?>
