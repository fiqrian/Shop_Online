<?php 
class Dashboard_admin extends CI_Controller
{
	public function __construct()
	{
       parent::__construct();
       if($this->session->userdata('role_id') != '1')
       {
       	$this->session->set_flashdata('pesan',
           		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Username atau Password Salah !!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
       	redirect('auth/login');
       }
	} 
	public function index()
	{

		$this->load->view('tamplates_admin/header');
		$this->load->view('tamplates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('tamplates_admin/footer');
	}
  public function admin_search()
{
  $keyword =$this->input->post('keywords');
  $data['barang']=$this->model_barang->get_keywords($keyword);
    $this->load->view('tamplates/header');
    $this->load->view('tamplates/sidebar');
    $this->load->view('admin/dashboard');
    $this->load->view('tamplates/footer');
}

}