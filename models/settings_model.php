<?php class settings_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
          $this->load->database();
  }
  public function load_user_data($role_id)
  {
      $sql="SELECT * FROM Users WHERE Role_id=?";
      $query = $this->db->query($sql, $role_id);
      return $query->result();
  }

  public function update_user_info($role_id,$school){
    // $sql="SELECT * FROM Users WHERE Role_id=? LIMIT 1";
    // $query=$this->db->query($sql,$role_id);
    // $data=array();
    // foreach ($query->result_array() as $row)
    // {
    //      $data['Fname']=$row['Fname'];
    //      $data['Lname']=$row['Lname'];
    //      $data['email']= $row['email'];
    //      $data['Password']=$row['Password'];
    // }
    // if ($data['email']==$username and $data['Password']==$password){
     $data1 = array(
        'school' => $school,
);
        $this->db->where('Role_ID', $role_id);
        $this->db->update('Users', $data1);


    // }
  }
} ?>
