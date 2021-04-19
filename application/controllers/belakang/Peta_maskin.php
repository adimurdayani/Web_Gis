<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_maskin extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('m_user');
  $this->load->model('m_petamaskin');


  if (!$this->session->userdata('email')) {
   redirect('login/login');
  }
 }
 public function index()
 {
  $data = [
   'judul'                 => 'Peta Wilayah | Peta Masyarakat Miskin',
   'get_user'              => $this->m_user->get_user(),
   'list_pmaskin'          => $this->db->get('p_maskin')->result_array(),
   'isi'                   => 'belakang/wilayah/peta_maskin/index'
  ];
  $this->load->view('template_belakang/wraper', $data, FALSE);
 }

 public function tbh_data()
 {
  # code...
  $data = [
   'judul'                 => 'Peta Wilayah | Peta Masyarakat Miskin',
   'get_user'              => $this->m_user->get_user(),
   'isi'                   => 'belakang/wilayah/peta_maskin/tbh_data'
  ];
  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code..
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_petamaskin->tbh_data();
  }
 }

 public function edit_data($id)
 {
  # code...
  $data = [
   'judul'                 => 'Peta Wilayah | Peta Masyarakat Miskin',
   'get_user'              => $this->m_user->get_user(),
   'get_petamaskin'        => $this->db->get_where('p_maskin', ['id' => $id])->row_array(),
   'isi'                   => 'belakang/wilayah/peta_maskin/edit_data'
  ];
  $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
  $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
   # code..
   $this->load->view('template_belakang/wraper', $data, FALSE);
  } else {
   # code...
   $this->m_petamaskin->edit_data();
  }
 }

 public function delete_data($id)
 {
  # code...
  $this->db->delete('p_maskin', ['id' => $id]);
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
  redirect('belakang/peta_maskin');
 }
}

/* End of file Peta_maskin.php */