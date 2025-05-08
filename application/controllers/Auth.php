<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() //pertama kali dijalankan
    {
        parent::__construct(); //jalankan CI yang di extends
        $this->load->model('Login_model');
    }

	public function index()
	{
		$this->load->view('login');
	}

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $cek = $this->Login_model->cek_login($email, $password);
        if ($cek == 1) {
            $admin = $this->Login_model->admin_login($email, $password);
            foreach ($admin as $a)
            {
                $this->session->set_userdata('email',$email);
                redirect('Admin'); //ke controllers admin, otomatis index
            }
        }
    }
}
