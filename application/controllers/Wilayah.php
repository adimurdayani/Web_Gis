<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_maskin');
  }


  public function index()
  {
    $data = [
      'judul'         => 'Halaman Wilayah | WebGis',
      'get_wilayah'   => $this->db->get('maskin')->result_array(),
      'list_maskin'   => $this->db->get('maskin')->result_array(),
      'alamat' => $this->db->get('alamat')->result_array(),
      'list_alamat' =>   $this->db->get('alamat')->result_array(),
      'isi'           => 'depan/wilayah/wilayah'
    ];

    $this->load->view('template_depan/wraper', $data, FALSE);
  }
}

/* End of file Wilayah.php */