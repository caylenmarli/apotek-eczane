<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->model('Supplier_model');
    }

    public function index()
    {
        $data['obat'] = $this->Obat_model->get();
        $this->load->view('header', $data);
        $this->load->view('data_obat');
        $this->load->view('footer');
    }

    public function input()
    {
        $data['supplier'] = $this->Supplier_model->get();
        $this->load->view('header', $data);
        $this->load->view('input_obat');
        $this->load->view('footer');
    }

    public function insert()
    {
        $data = [
            'ID_obat' => $this->input->post('idObat'),
            'nama_obat' => $this->input->post('namaObat'),
            'stok_obat' => $this->input->post('stok'),
            'harga_obat' => $this->input->post('harga'),
            'ID_supplier' => $this->input->post('idSupp')
        ];
        $this->Obat_model->insert($data);
        redirect('Obat/index');
    }

    public function edit($id)
    {
        $data['supplier'] = $this->Supplier_model->get();
        $data['data_obat'] = $this->Obat_model->getById($id);
        $this->load->view('header', $data);
        $this->load->view('update_obat');
        $this->load->view('footer');
    }

    public function update()
    {
        $IdEdit = $this->input->post('IdEdit');
        $data = [
            'ID_obat' => $this->input->post('idObat'),
            'nama_obat' => $this->input->post('namaObat'),
            'stok_obat' => $this->input->post('stok'),
            'harga_obat' => $this->input->post('harga'),
            'ID_supplier' => $this->input->post('idSupp')
        ];
        $this->Obat_model->update(['ID_obat'=> $IdEdit], $data);
        redirect('Obat/index');
    }

    public function delete($id){
        $this->Obat_model->delete($id);
        redirect('Obat/index');
    }
}
