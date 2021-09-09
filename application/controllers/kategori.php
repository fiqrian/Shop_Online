<?php 
/**
 * 
 */
class Kategori extends CI_Controller
{
	
  public function laptop()
	{
		$data['laptop'] = $this->model_kategori->data_laptop()->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('laptop',$data);
		$this->load->view('tamplates/footer');
		
	}
  public function komputer()
	{
		$data['komputer'] = $this->model_kategori->data_komputer()->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('komputer',$data);
		$this->load->view('tamplates/footer');
		
	}
  public function sp_laptop()
	{
		$data['sp_laptop'] = $this->model_kategori->data_sp_laptop()->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('sp_laptop',$data);
		$this->load->view('tamplates/footer');
		
	}
  public function sp_komputer()
	{
		$data['sp_komputer'] = $this->model_kategori->data_sp_komputer()->result();
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('sp_komputer',$data);
		$this->load->view('tamplates/footer');
		
	}
}