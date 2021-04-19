<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_petamaskin extends CI_Model
{

 public function tbh_data()
 {
  # code...
  $judul = $this->input->post('judul');
  $gambar = $_FILES['gambar']['name'];
  $deskripsi = $this->input->post('deskripsi');

  if ($gambar) {
   $config['allowed_types'] = 'gif|jpg|png';
   $config['max_size']      = '2048';
   $config['upload_path'] = './assets/img/';

   $this->load->library('upload', $config);

   if ($this->upload->do_upload('gambar')) {

    $new_image = $this->upload->data('file_name');
    $this->db->set('gambar', $new_image);
   } else {
    echo $this->upload->display_errors();
   }
  }
  $this->db->set('judul', $judul);
  $this->db->set('deskripsi', $deskripsi);
  $this->db->insert('p_maskin');
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
  redirect('belakang/peta_maskin');
 }

 public function edit_data()
 {
  # code...
  $judul = $this->input->post('judul');
  $gambar = $_FILES['gambar']['name'];
  $deskripsi = $this->input->post('deskripsi');

  if ($gambar) {
   $config['allowed_types'] = 'gif|jpg|png';
   $config['max_size']      = '2048';
   $config['upload_path'] = './assets/img/';

   $this->load->library('upload', $config);

   if ($this->upload->do_upload('gambar')) {

    $new_image = $this->upload->data('file_name');
    $this->db->set('gambar', $new_image);
   } else {
    echo $this->upload->display_errors();
   }
  }
  $this->db->set('judul', $judul);
  $this->db->set('deskripsi', $deskripsi);
  $this->db->update('p_maskin');
  $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di ubah!</div>');
  redirect('belakang/peta_maskin');
 }
}

/* End of file M_petamaskin.php */