<?php
class my_events_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
      $this->load->database();
  }


  public function my_events($role_id){
//     $this->db->select('*');
// $this->db->from('MyEvent');
// $this->db->join('Events_Conf','MyEvent.E_ID=Events_Conf.E_ID');
// $this->db->where('MyEvent.Role_ID',$role_id);
// $query=$this->db->get();
// $data=array();
// $count=0;
// foreach ($query->result_array() as $row)
// {
//         $count+=1;
//         $data['E_ID']= $row['E_ID'];
//         $data['Role_ID']= $row['Role_ID'];
//         $data['Event_type']= $row['Event_type'];
//         $data['Event_Topic']= $row['Event_Topic'];
//         $data['SDED']= $row['SDED'];
//         $data['EDate']=$row['EDate'];
//         $data['conf_flag']= $row['conf_flag'];
// }
//         $data['count']=$count;
//     return $data;
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
    //
    // $sql = "SELECT * from Events_Conf INNER JOIN MyEvent on Events_Conf .E_ID=MyEvent .E_ID where MyEvent .Role_ID=?";
    // $query = $this->db->query($sql,$role_id);
    // //user_id, usern_name, fname,lname,password,role_id,created_date
    // print_r( $query);
    // return $query->result();
  }

?>
<!-- (Select E_ID from MyEvent where Role_ID=)
Select * from the  -->
