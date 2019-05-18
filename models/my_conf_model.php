<?php
class my_conf_model extends CI_Model{

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
public function myconfs_load($role_id)
{
  $this->db->select('*');
$this->db->from('Events_Conf');
$this->db->join('MyEvent','MyEvent.E_ID=Events_Conf.E_ID');
$this->db->where('MyEvent.Role_ID',$role_id);
$query=$this->db->get();
return $query->result_array();

}
} ?>
