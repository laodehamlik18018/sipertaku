<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/index');
        $this->load->view('user/footer');
    }
}
