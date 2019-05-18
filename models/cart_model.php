<?php
class cart_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->database();
  }

  public function load_merchandize_data($list){
    //print_r($list);
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
     
     $sql ="SELECT * FROM Marchandize WHERE Item_ID IN (".$ids.")";
     $query = $this->db->query($sql);
     return $query->result();

  }

public function load_cart($Fname,$Lname,$email,$Addr,$apt,$city,$postal,$list){
  $sql = "INSERT into Cart (Contact_email,First_name,Last_name,addr,apt_no,city,postal_code,order_det) values (?, ?, ?, ?, ?,?,?,? )";
        $this->db->query($sql,array($email,$Fname,$Lname,$Addr,$apt,$city,$postal,$list));
        $res=$this->db->affected_rows();
        return $res;
}
// function insert_cart($Fname,$Lname,$email,$Addr,$apt,$city,$postal,$list){
//     $sql = "INSERT into Cart (Contact_email,First_name,Last_name,addr,apt_no,city,postal_code,order_det) values (?, ?, ?, ?, ?,?,?,? )";
//       $this->db->query($sql,array($email,$Fname,$Lname,$Addr,$apt,$city,$postal,$list));
//       $res=$this->db->affected_rows();
//       return $res;
//   }
}
 ?>
