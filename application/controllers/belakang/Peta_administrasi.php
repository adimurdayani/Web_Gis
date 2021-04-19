<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_administrasi extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('m_user');
  $this->load->model('m_padministrasi');


  if (!$this->session->userdata('email')) {
   redirect('login/login');
  }
 }
 public function index()
 {
  $data = [
   'judul'                 => 'Peta Wilayah | Halaman Peta Administrasi',
   'get_user'              => $this->m_user->get_user(),
   'p_administrasi'        => $this->db->get('p_administrasi')->result_array(),
   'isi'                   => 'belakang/wilayah/peta_administrasi/index'
  ];
  $this->load->view('template_belakang/wraper', $data, FALSE);
 }

 public function tbh_data()
 {
  # code...
  $data = [
   'judul'                 => 'Peta Wilayah | Halaman Tambah Peta Administrasi',
   'get_user'              => $this->m_user->get_user(),
   'isi'                   => 'belakang/wilayah/peta_administrasi/tbh_data'
  ];
  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code...
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_padministrasi->tbh_data();
  }
 }

 public function edit_data($id)
 {
  # code...
  $data = [
   'judul'                 => 'Peta Wilayah | Halaman Tambah Peta Administrasi',
   'get_user'              => $this->m_user->get_user(),
   'get_petaadministrasi'  => $this->db->get_where('p_administrasi', ['id' => $id])->row_array(),
   'isi'                   => 'belakang/wilayah/peta_administrasi/edit_data'
  ];
  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code...
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_padministrasi->edit_data();
  }
 }

 public function delete_data($id)
 {
  # code...
  $this->db->delete('p_administrasi', ['id' => $id]);
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
  redirect('belakang/peta_administrasi');
 }
}

/* End of file Peta_administrasi.php */