<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Controller extends CI_Controller
{
    var $msg;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('usuarios_model');
        $this->load->database();
        $this->load->library('session');
    }
    public function index()
    {
        $data['msg'] = $this->msg;
        $this->load->view('login_view',$data);
    }
    public function login() //proceso de validacion para Login
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $user = $this->usuarios_model->get_usuario($email, $pass);

        if ($user) {
            $this->session->set_userdata('nombre', $user->nombre);
            redirect('welcome');
        } else {
            $this->msg = "Correo electrónico y/o Clave incorrecta";
            $this->index();
        }
    }
    public function logout() //Salir
    {
        $this->session->sess_destroy();
        redirect("login_controller");
    }
}
