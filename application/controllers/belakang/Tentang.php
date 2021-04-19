<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
    $this->load->model('m_tentang');

    if (!$this->session->userdata('email')) {
      redirect('login/login');
    }
  }
  

  public function index()
  {
    $data = [
      'judul'                 => 'Tambah Tentang | Halaman Tentang Admin',
      'list_tentang'           => $this->db->get('tentang')->result_array(),
      'get_user'              => $this->m_user->get_user(),
      'isi'                   => 'belakang/tentang/index'
    ];
    $this->load->view('template_belakang/wraper', $data, FALSE);
  }

  public function tbh_data()
  {
    # code...
    $data = [
      'judul'                 => 'Tentang | Halaman Tentang Admin',
      'get_user'              => $this->m_user->get_user(),
      'isi'                   => 'belakang/tentang/tbh_data'
    ];

    $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
    $this->form_validation->set_rules('isi', 'Isi', 'trim|required');
    $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('template_belakang/wraper', $data, FALSE);
    } else {
      # code...
      $this->m_tentang->tbh_data();
    }    
    
  }

  public function edit_data($id)
  {
    # code...
    $data = [
      'judul'                 => 'Edit Tentang | Halaman Tentang Admin',
      'get_user'              => $this->m_user->get_user(),
      'get_tentang'           => $this->db->get_where('tentang',['id'=>$id])->row_array(),
      'isi'                   => 'belakang/tentang/edit_data'
    ];

    $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
    $this->form_validation->set_rules('isi', 'Isi', 'trim|required');
    $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('template_belakang/wraper', $data, FALSE);
    } else {
      # code...
      $this->m_tentang->edit_data();
    }
  }

  public function delete_data($id)
  {
    # code...
    $this->db->delete('tentang',['id'=>$id]);
    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
    redirect('belakang/tentang');
    
  }

}

/* End of file Tentang.php */
