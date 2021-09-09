<?php 
class Dashboard extends CI_Controller{

  public function __construct()
  {
   parent::__construct();
   if($this->session->userdata('role_id') != '2')
   {
    $this->session->set_flashdata('pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> Anda Belum Login!!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button></div>');
    redirect('auth/login');
  }
} 

public function tambah_ke_keranjang($id)
{
 $barang = $this->model_barang->find($id);

 $data = array(
  'id'      => $barang->id_brg,
  'qty'     => 1,
  'price'   => $barang->harga,
  'name'    => $barang->nama_brg

);

 $this->cart->insert($data);
 redirect('allcom');
}
public function detail_keranjang()
{
  $this->load->view('tamplates/header');
  $this->load->view('tamplates/sidebar');
  $this->load->view('keranjang');
  $this->load->view('tamplates/footer');
}
public function hapus_keranjang()
{
  $this->cart->destroy();
  redirect('allcom/index');
}
public function pembayaran()
{
  $this->load->view('tamplates/header');
  $this->load->view('tamplates/sidebar');
  $this->load->view('pembayaran');
  $this->load->view('tamplates/footer'); 
}
public function proses_pesanan()
{
  $is_processed =$this->model_invoice->index();
  if($is_processed){
    $this->cart->destroy();
    $this->load->view('tamplates/header');
    $this->load->view('tamplates/sidebar');
    $this->load->view('proses_pesanan',$is_processed);
    $this->load->view('tamplates/footer'); 


  }else
  {
    echo "maaf pesanan anda gagal diproses!!!";
  }
}
public function pesanan()
{
  $is_processed =$this->model_invoice->index();
    $this->cart->destroy();
    $this->load->view('tamplates/header');
    $this->load->view('tamplates/sidebar');
    $this->load->view('proses_pesanan',$data);
    $this->load->view('tamplates/footer'); 


  }
public function detail($id_brg)
{
  $data['barang'] = $this->model_barang->detail_brg($id_brg);
  $this->load->view('tamplates/header');
  $this->load->view('tamplates/sidebar');
  $this->load->view('detail_barang',$data);
  $this->load->view('tamplates/footer'); 
}
public function keranjang_kosong()
{
  $this->load->view('tamplates/header');
  $this->load->view('tamplates/sidebar');
  $this->load->view('keranjang_kosong');
  $this->load->view('tamplates/footer');    
}



public function search()
{
  $keyword =$this->input->post('keyword');
  $data['barang']=$this->model_barang->get_keyword($keyword);
  $this->load->view('tamplates/header');
  $this->load->view('tamplates/sidebar');
  $this->load->view('dashboard',$data);
  $this->load->view('tamplates/footer');
}
public function servis()
{
  $this->load->view('tamplates/header');
  $this->load->view('tamplates/sidebar');
  $this->load->view('servis.html');
  $this->load->view('tamplates/footer');


}
public function cek_pesanan()
{
  $this->load->view('tamplates/header');
  $this->load->view('tamplates/sidebar');
  $this->load->view('cek_pesanan');
  $this->load->view('tamplates/footer');


}
}