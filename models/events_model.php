<?php
class events_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
      $this->load->database();
  }
  public function my_events($role_id){
    $sql = "SELECT e_id from MyEvent where role_id = ? ";
    $query = $this->db->query($sql,$role_id);
    //user_id, usern_name, fname,lname,password,role_id,created_date
    return $query->result();
  }
  public function load_events(){
    $sql = "SELECT * FROM Events_Conf";
    $query = $this->db->query($sql);
    //user_id, usern_name, fname,lname,password,role_id,created_date
    return $query->result();
  }


  public function insert_myevents($role_id,$E_ID)
  {
    $sql = "INSERT into MyEvent (Role_ID,E_ID) values (?, ? )";
      $this->db->query($sql,array($role_id,$E_ID));
      $res=$this->db->affected_rows();
      return $res;
  }
} ?>
