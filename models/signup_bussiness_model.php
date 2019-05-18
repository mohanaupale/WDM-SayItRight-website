<?php

	class signup_bussiness_model extends Ci_Model
	{
    public function __construct()
    {
      $this->load->database();
    }

		public function create_user($Lname,$B_type,$username,$password){
    //   print_r($username);
    //   $multiwhare=['email'=>$username,'Password'=>$password];
    //   $this->db->select('*');
    //   $this->db->where('email',$username);
    //   $query=$this->db->get('Users');
    //   print_r($query->num_rows());
    //   if ( $query->num_rows() > 0 )
    //   {
    //     echo "string";
    //     $row = $query->row_array();
    //     return $row;
    // }
    echo "string";
    $sql = "INSERT into Users (Lname,Type,email,Password,B_Type) values (?,?, ?,?,? )";
      $this->db->query($sql,array($Lname,"Business",$username,$password,$B_type));
      $res=$this->db->affected_rows();
      return $res;
      // $sql = "SELECT * FROM Users WHERE email = ? AND password = ? LIMIT 1";
			// $query = $this->db->query($sql, array($username,$password));
			// //user_id, usern_name, fname,lname,password,role_id,created_date
			// return $query->result();
		}


	}

?>
