<?php

class Model_squrity Extends CI_Model{
    public function get_squrity()
    {
        $user = $this->session->userdata('username');
        $pass = $this->session->userdata('password');

        if (empty($user) && empty($pass)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}