<?php
class M_login extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    function cek($email, $password) {
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $this->db->where("status", "admin");

        return $this->db->get("masuk");
    }



}
