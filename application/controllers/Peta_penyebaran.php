<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_penyebaran extends CI_Controller
{

 public function index()
 {
  $data = [
   'judul'                => 'Halaman Tematik | WebGis',
   'get_petapenyebaran'   => $this->db->get('p_persebaran')->result_array(),
   'getpetapenyebaran'    => $this->db->get_where('p_persebaran')->row_array(),
   'isi'                  => 'depan/wilayah/peta_penyebaran/index'
  ];

  $this->load->view('template_depan/wraper', $data, FALSE);
 }
}

/* End of file Peta_penyebaran.php */