<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tentang extends CI_Model
{

  public function tbh_data()
  {
    # code...
    $data = [
      'judul'   => $this->input->post('judul'),
      'isi'     => $this->input->post('isi'),
      'penulis' => $this->input->post('penulis')
    ];

    $this->db->insert('tentang', $data);
    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
    redirect('belakang/tentang');
  }

  public function edit_data()
  {
    # code...
    $data = [
      'judul'   => $this->input->post('judul'),
      'isi'     => $this->input->post('isi'),
      'penulis' => $this->input->post('penulis')
    ];

    $this->db->where('id', $this->input->post('id'));

    $this->db->update('tentang', $data);
    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
    redirect('belakang/tentang');
  }
}

/* End of file M_tentang.php */