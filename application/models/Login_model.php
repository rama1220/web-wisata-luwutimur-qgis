<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function checklogin($username, $password){
      return $this->db->query("SELECT * FROM pengguna WHERE  nm_pengguna='$username' AND  kt_sandi='$password'")->result();
    }
}