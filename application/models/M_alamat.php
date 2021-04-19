<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_alamat extends CI_Model
{

  public function tbh_data()
  {
    # code...
    $data = [
      'kontak'      => $this->input->post('kontak'),
      'alamat'      => $this->input->post('alamat'),
      'email'       => $this->input->post('email'),
      'facebook'    => $this->input->post('facebook'),
      'instagram'   => $this->input->post('instagram'),
      'latitude'    => $this->input->post('latitude'),
      'longitude'   => $this->input->post('longitude')
    ];

    $this->db->insert('alamat', $data);
    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
    redirect('belakang/alamat');
  }

  public function edit_data()
  {
    # code...
    $data = [
      'kontak'      => $this->input->post('kontak'),
      'alamat'      => $this->input->post('alamat'),
      'email'       => $this->input->post('email'),
      'facebook'    => $this->input->post('facebook'),
      'instagram'   => $this->input->post('instagram'),
      'latitude'    => $this->input->post('latitude'),
      'longitude'   => $this->input->post('longitude')
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('alamat', $data);
    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
    redirect('belakang/alamat');
  }
}

/* End of file M_alamat.php */