<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('m_user');
  $this->load->model('m_sejarah');

  if (!$this->session->userdata('email')) {
   redirect('login/login');
  }
 }


 public function index()
 {
  $data = [
   'judul'                 => 'Sejarah | Halaman Data Sejarah Admin',
   'get_user'              => $this->m_user->get_user(),
   'list_sejarah'           => $this->db->get('sejarah')->result_array(),
   'isi'                   => 'belakang/sejarah/index'
  ];
  $this->load->view('template_belakang/wraper', $data, FALSE);
 }

 public function tbh_data()
 {
  # code...
  $data = [
   'judul'                 => 'Tambah Sejarah | Halaman Sejarah Admin',
   'get_user'              => $this->m_user->get_user(),
   'isi'                   => 'belakang/sejarah/tbh_data'
  ];

  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('isi', 'Isi', 'trim|required');
  $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code...
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_sejarah->tbh_data();
  }
 }

 public function edit_data($id)
 {
  # code...
  $data = [
   'judul'                 => 'Tambah Sejarah | Halaman Sejarah Admin',
   'get_user'              => $this->m_user->get_user(),
   'get_sejarah'           => $this->db->get_where('sejarah', ['id' => $id])->row_array(),
   'isi'                   => 'belakang/sejarah/edit_data'
  ];

  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('isi', 'Isi', 'trim|required');
  $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code...
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_sejarah->edit_data();
  }
 }

 public function delete_data($id)
 {
  # code...
  $this->db->delete('sejarah', ['id' => $id]);
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
  redirect('belakang/sejarah');
 }
}

/* End of file Sejarah.php */