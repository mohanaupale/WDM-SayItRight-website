<?php class Cart extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
     $this->load->library('form_validation');
      $this->load->helper(array('form', 'url'));
  }

  function index()
  {
     $list=$this->input->post('list');
     $list=rtrim($list,'\'');
     $list=ltrim($list,'\'');
     if($list){
        $cart=json_decode($list,true);
        $ids="";
        foreach($cart as $key => $val){
          $ids .=$key. ',' ;
        }
        $ids=rtrim($ids,',');
        $total = 0;
        //print_r($cart);

      }
     $this->load->model('cart_model');
     $data['merchandize']=$this->cart_model->load_merchandize_data($list);
     $data['cart']=$cart;
     $data['list']=$list;
     $this->load->view('pages/cart',$data);
    //$this->load->view('pages/cart');

  }
public function order(){
  $Fname =      $this->input->post("Fname");
  $Lname =		 $this->input->post("Lname");
  $email =      $this->input->post("email");
  $Addr =		 $this->input->post("Addr");
  $apt =      $this->input->post("apt");
  $city =		 $this->input->post("city");
  $list =		 $this->input->post("list");
  $postal =      $this->input->post("postal");
  $this->form_validation->set_rules('email', 'Email', 'required');
  $this->form_validation->set_rules('Addr', 'Addr', 'required');
  $this->form_validation->set_rules('Fname', 'Fname', 'required');
  $this->form_validation->set_rules('postal', 'postal', 'required');
  $this->form_validation->set_rules('Lname', 'Lname', 'required');

  if($this->form_validation->run()){
    // echo "true";

    $this->load->model('cart_model');
    $result= $this->cart_model->load_cart($Fname,$Lname,$email,$Addr,$apt,$city,$postal,$list);
    //$result = $this->cart_model>insert_cart($Fname,$Lname,$email,$Addr,$apt,$city,$postal,$list);
    if ($result> 0){
      echo '<script>alert("Order Successful!");</script>';
      redirect(Buy_From_Us);

    }
    else {
      echo '<script>alert("Order Unsuccessful! please Try again");</script>';


    }
  }
else{
  echo '<script>alert("Enter the personal Details");</script>';
   redirect('Buy_From_Us');
}
}
} ?>
