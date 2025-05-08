<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model 
{
    public $table = 'penjualan';
    public $id = 'penjualan.ID_penjualan';
	public function __construct()
	{
		parent::__construct();
	}
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row_array();
    }
   
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    public function getDuit()
    {
        $query = $this->db->query("select total_bayar from penjualan");
        return $query->result_array();
    }

    public function getTahun()
    {
        $query = $this->db->query("select SUBSTRING(tanggal_jual, 1, 4) AS tahun, sum(total_bayar) as total
         from penjualan group by tahun");
        return $query->result_array();
    }
}