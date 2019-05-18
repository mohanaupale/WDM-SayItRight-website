<?php
 class buyfromus_model extends  CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  public function load_products()
  {
    $sql = "SELECT * FROM Marchandize";
    $query = $this->db->query($sql);
    //user_id, usern_name, fname,lname,password,role_id,created_date
    return $query->result();
  }

} ?>
