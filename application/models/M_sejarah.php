<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sejarah extends CI_Model
{

 public function tbh_data()
 {
  # code...
  $data = [
   'judul'   => $this->input->post('judul'),
   'isi'     => $this->input->post('isi'),
   'penulis' => $this->input->post('penulis')
  ];

  $this->db->insert('sejarah', $data);
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
  redirect('belakang/sejarah');
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

  $this->db->update('sejarah', $data);
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
  redirect('belakang/sejarah');
 }
}

/* End of file M_sejarah.php */