<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function menu()
	{
        $this->load->view('layout/head');
		$this->load->view('menu');
        $this->load->view('layout/footer');
	}
    public function login(){
        $this->load->view('layout/head');
        $this->load->view('login');
        $this->load->view('layout/footer');
    }
    public function register(){
        $this->load->view('layout/head');
        $this->load->view('register');
        $this->load->view('layout/footer');
    }
}
