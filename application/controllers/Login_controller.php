<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
      
    class Login_Controller extends CI_Controller {  
          
        public function index()  
        {  
            $this->load->view('login_view');  
        }  
        public function process()  
        {  
            $user = $this->input->post('user');  
            $pass = $this->input->post('pass');  
            if ($user=='Ale Centeno' && $pass=='17460100')   
            {  
                //declaring session  
                $this->session->set_userdata(array('user'=>$user));  
                $this->load->view('welcome_message');  
            }  
            else{  
                $data['error'] = 'Your Account is Invalid';  
                $this->load->view('login_view', $data);  
            }  
        }  
        public function logout()  
        {  
            //removing session  
            $this->session->unset_userdata('user');  
            redirect("Login");  
        }  
      
    }
