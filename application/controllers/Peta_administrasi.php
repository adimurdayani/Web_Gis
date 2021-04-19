<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_administrasi extends CI_Controller
{

 public function index()
 {
  $data = [
   'judul'                => 'Halaman Peta administrasi | WebGis',
   'get_petaadministrasi' => $this->db->get_where('p_administrasi')->row_array(),
   'isi'                  => 'depan/wilayah/peta_administrasi/index'
  ];

  $this->load->view('template_depan/wraper', $data, FALSE);
 }
}

/* End of file Peta_administrasi.php */