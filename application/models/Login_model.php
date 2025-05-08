<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function cek_login($email, $password) // Untuk cek data di tabel Admin
    {
        $q = $this->db->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
        $cek = $q->num_rows();
        return $cek;
    }

    public function admin_login($email, $password) // Untuk mengambil data Admin di tabel Admin
    {
        $q = $this->db->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
        $data = $q->result();
        return $data;
    }

    public function profil()
    {
        $this->db->from('admin');
        $this->db->where('Email', $this->session->userdata('email'));
        $query = $this->db->get();
        return $query->result_array();
    }
}
