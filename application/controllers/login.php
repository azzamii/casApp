<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    } 

    public function get_login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->load->model('model_login');
        $this->model_login->get_login($user, $pass);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}