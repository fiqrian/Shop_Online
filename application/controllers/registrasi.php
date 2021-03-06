<?php 
/**
 * 
 */
class Registrasi extends CI_controller
{
	
	public function index()
	{
		$this->form_validation->set_rules('nama','Nama','required',['required' => 'Nama Wajib Diisi!']);
		$this->form_validation->set_rules('username','Username','required',['required' => 'Username Wajib Diisi!']);
		$this->form_validation->set_rules('password_1','Password','required|matches[password_2]',[
			'required' => 'Password Wajib Diisi!',
			'matches'  => 'Tidak Cocok !!!'] );
		$this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('tamplates/header');
			$this->load->view('registrasi');
			$this->load->view('tamplates/footer');
		}else
		{
			$data = array(
				'id'         => '',
				'nama'       => $this->input->post('nama'),
				'username'   => $this->input->post('username'),
				'password'   => $this->input->post('password_1'),
				'role_id'    => 2,
			);
			$this->db->insert('tb_user',$data);
			$this->session->set_flashdata('pesan',
				'<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong> Daftar Berhasil !!!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/login');
		}

	}
}