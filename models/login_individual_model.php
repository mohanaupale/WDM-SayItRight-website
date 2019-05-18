<?php /**
 *
 */
class login_individual_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();

  }
 public function check_Event($role_id)
 {
   $base_query="SELECT Type from Users where Role_ID = ?";
   $query=$this->db->query($base_query,$role_id);
   foreach ($query->result_array() as $row)
   {
        $data['Type']= $row['Type'];
    }
   //$data0 = $query->Type;
   // $sql = "SELECT COUNT(Role_ID) AS event_count FROM MyEvent where Role_ID=? ";
   // $query1 = $this->db->count_all($sql,$role_id);
   // $data1 = $query1->result();
   $data['event_count']=$this->db->where('Role_ID', $role_id)->count_all_results('MyEvent');
   //print_r($data1);
   $sql_conf = "SELECT E_ID as conf_count from MyEvent where MyEvent.Role_ID= ? and MyEvent.E_ID= ANY(Select E_ID from Events_Conf where Conf_flag=1)";
   $query2 = $this->db->query($sql_conf,$role_id);
   $count=0;
   foreach ($query2->result_array() as $row) {
     $count+=1;
   }
   $data['Conf_count']=$count;
   //echo $data['Type'];
   return $data;
     //
     // $sql = "SELECT * FROM Users WHERE email = ? AND password = ? LIMIT 1";
     //  $query = $this->db->query($sql, array($username,$password));
     //  //user_id, usern_name, fname,lname,password,role_id,created_date
     //  return $query->result();
 }
}

 ?>
