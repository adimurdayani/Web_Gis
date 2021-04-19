<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

 public function index()
 {
  $data = [
   'judul'       => 'Halaman Tentang | WebGis',
   'get_tentang' => $this->db->get('tentang')->row_array(),
   'alamat' => $this->db->get('alamat')->result_array(),
   'list_alamat' =>   $this->db->get('alamat')->result_array(),
   'isi'         => 'depan/profil/tentang/index'
  ];

  $this->load->view('template_depan/wraper', $data, FALSE);
 }
}

/* End of file Tentang.php */