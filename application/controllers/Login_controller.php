<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Controller extends CI_Controller
{
    var $msg;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('usuarios_model');
        $this->load->library('session');
    }
    public function login()
    {
        $data['msg'] = $this->msg;
        $this->load->view('login_view',$data);
    }
    public function validation() //proceso de validacion para Login
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $user = $this->usuarios_model->get_usuario($email, $pass);

        if ($user) {
            $this->session->set_userdata('nombre', $user->nombre);
            redirect('inicio_controller');
        } else {
            $this->msg = "Correo electrónico y/o Clave incorrecta";
            $data['msg'] = $this->msg;
            redirect("login_view", $data);
        }
    }
    public function logout() //Salir
    {
        $this->session->sess_destroy();
        redirect("login_controller/login");
    }
}
