<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_persebaran extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('m_user');
  $this->load->model('m_petapersebaran');

  if (!$this->session->userdata('email')) {
   redirect('login/login');
  }
 }
 public function index()
 {
  $data = [
   'judul'                 => 'Peta Tematik',
   'get_user'              => $this->m_user->get_user(),
   'list_petapersebaran'   => $this->db->get('p_persebaran')->result_array(),
   'isi'                   => 'belakang/wilayah/peta_persebaran/index'
  ];
  $this->load->view('template_belakang/wraper', $data, FALSE);
 }

 public function tbh_data()
 {
  # code...
  $data = [
   'judul'                 => 'Peta Wilayah | Tambah Peta Persebaran',
   'get_user'              => $this->m_user->get_user(),
   'isi'                   => 'belakang/wilayah/peta_persebaran/tbh_data'
  ];
  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code...
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_petapersebaran->tbh_data();
  }
 }
 public function edit_data($id)
 {
  # code...
  $data = [
   'judul'                 => 'Peta Wilayah | Tambah Peta Persebaran',
   'get_user'              => $this->m_user->get_user(),
   'get_petapersebaran'    => $this->db->get_where('p_persebaran', ['id' => $id])->row_array(),
   'isi'                   => 'belakang/wilayah/peta_persebaran/edit_data'
  ];
  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code...
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_petapersebaran->edit_data();
  }
 }

 public function delete_data($id)
 {
  # code...
  $this->db->delete('p_persebaran', ['id' => $id]);
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
  redirect('belakang/peta_persebaran');
 }
}

/* End of file Peta_persebaran.php */