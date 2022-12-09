<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index(){

        $data = array(
            'title' => 'Eazy Talk',
            'isi' => 'admin/v_home',
        ); 
        $this->load->view('admin/v_wrapper',$data,FALSE);
    }




}