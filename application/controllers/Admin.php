<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->model('Staff_model');
        $this->load->model('Supplier_model');
        $this->load->model('Penjualan_model');
        $this->load->model('Login_model');
    }

	public function index()
	{
        $data['totalobat']=$this->Obat_model->totalObat();
        $data['totalstaff']=$this->Staff_model->totalStaff();
        $data['totalsupplier']=$this->Supplier_model->totalSupplier();
        $data['totalduit']=$this->Penjualan_model->getDuit();
        $data['totaltahun']=$this->Penjualan_model->getTahun();
        $this->load->view('header',$data);
		$this->load->view('dashboard');
        $this->load->view('footer');
	}

    public function profil()
    {
        $data['profil']=$this->Login_model->profil();
        $this->load->view('header', $data);
		$this->load->view('profil');
        $this->load->view('footer');
    }
}