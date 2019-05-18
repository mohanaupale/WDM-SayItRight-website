<?php
class contact_us_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->database();
  }
public function save_info($fname,$lname,$phone,$msg)
{
  $sql = "INSERT into Contact_us (First_name,Last_name,phone,msg) values (?, ?, ?, ? )";
    $this->db->query($sql,array($fname,$lname,$phone,$msg));
    $res=$this->db->affected_rows();
    return $res;
}
} ?>
