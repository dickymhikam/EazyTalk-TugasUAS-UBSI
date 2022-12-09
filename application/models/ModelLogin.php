<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function index()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'username'=> $username,
            'password'=> $password,
        ));
        return $this->db->get()->row();
    }
}