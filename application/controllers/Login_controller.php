<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Users_model');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('login_view');
    }
    public function login() //proceso de validacion para Login
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $user = $this->users_model->get_usuario($email, $pass);

        if ($user) {
            $this->session->set_userdata('nombre', $user->nombre);
            redirect('Welcome');
        } else {
            $this->msg = "Correo electrónico y/o Clave incorrecta";
            $this->index();
        }
    }
    public function logout() //Salir
    {
        $this->session->sess_destroy();
        redirect("Login");
    }
}
