<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        if (! $this->session->has_userdata('nombre')) {
            redirect('login_controller/login');
        }
        $this->load->view('inicio_view');  
    }
}