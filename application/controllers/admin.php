<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/beranda');
        $this->load->view('layout/footer');
    }
    public function beranda()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/beranda');
        $this->load->view('layout/footer');
    }
    public function Tanah()
    {
        $this->load->view('layout/header');
        $this->load->view('datatanah/tanah');
        $this->load->view('layout/footer');
    }
    public function informasi()
    {
        $this->load->view('layout/header');
        $this->load->view('informasi/index');
        $this->load->view('layout/footer');
    }
    public function tentang()
    {
        $this->load->view('layout/header');
        $this->load->view('tentang');
        $this->load->view('layout/footer');
    }
}
