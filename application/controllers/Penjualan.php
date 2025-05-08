<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model');
        $this->load->model('Staff_model');
        $this->load->model('Obat_model');
    }

    public function index()
    {
        $data['penjualan'] = $this->Penjualan_model->get();
        $this->load->view('header', $data);
        $this->load->view('header');
        $this->load->view('data_penjualan');
        $this->load->view('footer');
    }

    public function input()
    {
        $data['staff'] = $this->Staff_model->get();
        $data['obat'] = $this->Obat_model->get();
        $this->load->view('header', $data);
        $this->load->view('input_penjualan');
        $this->load->view('footer');
    }

    public function insert()
    {
        $data = [
            'ID_penjualan' => $this->input->post('idJual'),
            'tanggal_jual' => $this->input->post('tanggal'),
            'jumlah_terjual' => $this->input->post('jumlah'),
            'total_bayar' => $this->input->post('total'),
            'ID_staff' => $this->input->post('idStaff'),
            'ID_obat' => $this->input->post('idObat')
        ];
        $this->Penjualan_model->insert($data);
        redirect('Penjualan/index');
    }

}
