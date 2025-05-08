<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_model');
    }

    public function index()
    {
        $data['supplier'] = $this->Supplier_model->get();
        $this->load->view('header', $data);
        $this->load->view('data_supplier');
        $this->load->view('footer');
    }

    public function input()
    {
        $this->load->view('header');
        $this->load->view('input_supplier');
        $this->load->view('footer');
    }

    public function insert()
    {
        $data = [
            'ID_supplier' => $this->input->post('idSupp'),
            'nama_supplier' => $this->input->post('namaSupp'),
            'alamat_supplier' => $this->input->post('alamat')
        ];
        $this->Supplier_model->insert($data);
        redirect('Supplier/index');
    }

    public function edit($id)
    {
        $data['data_supplier'] = $this->Supplier_model->getById($id);
        $this->load->view('header', $data);
        $this->load->view('update_supplier');
        $this->load->view('footer');
    }

    public function update()
    {
        $IdEdit = $this->input->post('IdEdit');
        $data = [
            'ID_supplier' => $this->input->post('idSupp'),
            'nama_supplier' => $this->input->post('namaSupp'),
            'alamat_supplier' => $this->input->post('alamat')
        ];
        $this->Supplier_model->update(['ID_supplier'=> $IdEdit], $data);
        redirect('Supplier/index');
    }

    public function delete($id){
        $this->Supplier_model->delete($id);
        redirect('Supplier/index');
    }
}
