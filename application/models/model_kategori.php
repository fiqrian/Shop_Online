<?php 
class Model_kategori extends CI_Model
{
	
	public function data_laptop()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'laptop'));
	}
	public function data_komputer()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'komputer'));
	}
	public function data_sp_laptop()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'sparepart laptop'));
	}
	public function data_sp_komputer()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'sparepart komputer'));
	}
}