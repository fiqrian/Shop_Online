<?php 
/**
 * 
 */
class Allcom extends CI_Controller
{ 
	
	public function index()
  {
  	$data['barang'] = $this->model_barang->tampil_data()->result();
  	$this->load->view('tamplates/header');
  	$this->load->view('tamplates/sidebar');
  	$this->load->view('dashboard',$data);
  	$this->load->view('tamplates/footer');
  }
   /*$this->session->set_flashdata('data');
             redirect('data_barang');
             $this->session->set_flashdata('proses_pesanan');
             redirect('proses_pesanan');
           	 $this->session->set_flashdata('kosong');
            redirect('keranjang');*/

}
