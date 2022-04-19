<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

       // ^ load model Adminmodel supaya bisa ambil data dari database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasienmodel');
    }

	public function index()
	{   
        $data['listpasien'] = $this->Pasienmodel->get_pasien();
		$this->load->view('pasien',$data);
	}
    public function add_pasien()
    {
        $this->load->view('add');
        // ^ load footer
        $this->load->view('template/footer');
    }

    public function edit_pasien($a = null)
    { 
        $data['pasien'] = $this->Pasienmodel->get_pasien_by_id($a);
        $this->load->view('template/header');
        $this->load->view('edit',$data);
        // ^ load footer
        $this->load->view('template/footer');
    }

      // ^ membuat fungsi insert pasien ke database
      public function insert_pasien()
      {
          // ^ menginput input GET ke fungsi insert_buku dalam admin model kalo berhasil maka akan kembali ke halaman admin jika gagal mengulangi lagi
          if ($this->Pasienmodel->insert_pasien($this->input->post())) {
              $this->session->set_flashdata('pesan', ('Pasien berhasil ditambahkan'));
              redirect(base_url('pasien'));
          } else {
              $this->session->set_flashdata('pesan', ('Pasien gagal ditambahkan'));
              redirect(base_url('pasien/add_pasien'));
          }
      }

      public function update_pasien()
      {
          // ^ menginput input GET ke fungsi insert_buku dalam admin model kalo berhasil maka akan kembali ke halaman admin jika gagal mengulangi lagi
          if ($this->Pasienmodel->update_pasien($this->input->post())) {
              $this->session->set_flashdata('pesan', ('Pasien berhasil ditambahkan'));
              redirect(base_url('pasien'));
          } else {
              $this->session->set_flashdata('pesan', ('Pasien gagal ditambahkan'));
              redirect(base_url('pasien/add_pasien'));
          }
      }
   
      public function delete_pasien($id = null)
    {
        $this->Pasienmodel->delete_pasien($id);
        $this->session->set_flashdata('pesan', 'Pasien berhasil dihapus');
        redirect(base_url('pasien'));
    }

    public function print_pasien()
    {
        $data['listpasien'] = $this->Pasienmodel->get_pasien();
		$this->load->view('printpasien',$data);
    }
}