<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model{

  public function __construct()
  {
    $this->load->database();
  }

public function subscribe()
{
    $data=array('email'=>$this->input->post('email'));
    return $this->db->insert('subscribe',$data);
}
} ?>
