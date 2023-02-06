<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

    public function get_login($user, $pass)
    {
        $username = $this->db->where('username', $user);
        $password = $this->db->where('password', $pass);
        $query = $this->db->get('user');
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'id_user' => $row->id_user ,
                    'username' => $row->id_user ,
                    'password' => $row->id_user ,
                );
                $this->session->set_userdata($sess);
            }
            redirect('dashboard');
        }else{
            $this->session->set_flashdata('info', 'Maaf, <font style="color:red; font-weight:bold;">Username</font> Atau <font style="color:red; font-weight:bold;">Password Salah!!!</font>');
            redirect('login');
        }
    }
}