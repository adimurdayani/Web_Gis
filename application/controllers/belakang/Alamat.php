<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alamat extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
    $this->load->model('m_alamat');

    if (!$this->session->userdata('email')) {
      redirect('login/login');
    }
  }


  public function index()
  {
    $data = [
      'judul'                 => 'Alamat | Halaman Tentang Admin',
      'list_alamat'           => $this->db->get('alamat')->result_array(),
      'get_user'              => $this->m_user->get_user(),
      'isi'                   => 'belakang/alamat/index'
    ];
    $this->load->view('template_belakang/wraper', $data, FALSE);
  }

  public function tbh_data()
  {
    # code...

    $data = [
      'judul'                 => 'Tambah Data | Halaman Dashboard Admin',
      'get_user'              => $this->m_user->get_user(),
      'isi'                   => 'belakang/alamat/add_alamat'
    ];

    $this->form_validation->set_rules('kontak', 'Kontak', 'trim|required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('facebook', 'Facebook', 'trim|required');
    $this->form_validation->set_rules('instagram', 'Instagram', 'trim|required');
    $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
    $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('template_belakang/wraper', $data, FALSE);
    } else {
      # code...
      $this->m_alamat->tbh_data();
    }
  }

  public function edit_data($id)
  {
    # code...
    $data = [
      'judul'                 => 'Tambah Data | Halaman Dashboard Admin',
      'get_alamat'            => $this->db->get_where('alamat', ['id' => $id])->row_array(),
      'get_user'              => $this->m_user->get_user(),
      'isi'                   => 'belakang/alamat/edit_alamat'
    ];

    $this->form_validation->set_rules('kontak', 'Kontak', 'trim|required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('facebook', 'Facebook', 'trim|required');
    $this->form_validation->set_rules('instagram', 'Instagram', 'trim|required');
    $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
    $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('template_belakang/wraper', $data, FALSE);
    } else {
      # code...

      $this->m_alamat->edit_data();
    }
  }

  public function hapus_data($id)
  {
    # code...
    $this->db->delete('alamat', ['id' => $id]);
    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
    redirect('belakang/alamat');
  }
}

/* End of file Alamat.php */