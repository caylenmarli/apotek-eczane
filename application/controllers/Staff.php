<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Staff_model');
    }

    public function index()
    {
        $data['staff'] = $this->Staff_model->get();
        $this->load->view('header', $data);
        $this->load->view('header');
        $this->load->view('data_staff');
        $this->load->view('footer');
    }

    public function input()
    {
        $this->load->view('header');
        $this->load->view('input_staff');
        $this->load->view('footer');
    }

    public function insert()
    {
        $data = [
            'ID_staff' => $this->input->post('idStaff'),
            'nama_staff' => $this->input->post('namaStaff'),
            'no_hp_staff' => $this->input->post('noHP')
        ];
        $this->Staff_model->insert($data);
        redirect('Staff/index');
    }

    public function edit($id)
    {
        $data['data_staff'] = $this->Staff_model->getById($id);
        $this->load->view('header', $data);
        $this->load->view('update_staff');
        $this->load->view('footer');
    }

    public function update()
    {
        $IdEdit = $this->input->post('IdEdit');
        $data = [
            'ID_staff' => $this->input->post('idStaff'),
            'nama_staff' => $this->input->post('namaStaff'),
            'no_hp_staff' => $this->input->post('noHP')
        ];
        $this->Staff_model->update(['ID_staff'=> $IdEdit],$data);
        redirect('Staff/index');
    }

    public function delete($id){
        $this->Staff_model->delete($id);
        redirect('Staff/index');
    }

}
