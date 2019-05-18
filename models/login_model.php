<?php

	class Login_model extends Ci_Model
	{
    public function __construct()
    {
      $this->load->database();
    }

		public function validateUser($username, $password){
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

      $sql = "SELECT * FROM Users WHERE email = ? AND password = ? LIMIT 1";
			$query = $this->db->query($sql, array($username,$password));
			//user_id, usern_name, fname,lname,password,role_id,created_date
			return $query->result();
		}


	}

?>
