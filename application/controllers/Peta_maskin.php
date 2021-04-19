<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta_maskin extends CI_Controller
{

 public function index()
 {
  $data = [
   'judul'                => 'Halaman Peta administrasi | WebGis',
   'get_maskin'           => $this->db->get('maskin')->result_array(),
   'get_data'             => $this->db->get('maskin')->row_array(),
   'isi'                  => 'depan/wilayah/peta_maskin/index'
  ];

  $this->load->view('template_depan/wraper', $data, FALSE);
 }

 public function print()
 {
  $data = [
   'judul'       => 'Halaman Print Data',
   'get_data'    => $this->db->get('maskin')->result_array(),
   'isi'         => 'print/index'
  ];
  $this->load->view('print/index', $data, FALSE);
 }

 public function pdf()
 {
  # code...

  $data = [
   'judul'     => 'Laporan PDF',
   'get_data'  => $this->db->get('maskin')->result_array()
  ];
  $this->load->library('dompdf_gen');

  $this->load->view('download/index', $data, FALSE);

  $paper_size = 'A4';
  $orientation = 'potrait';
  $html = $this->output->get_output();
  $this->dompdf->set_paper($paper_size, $orientation);

  $this->dompdf->load_html($html);
  $this->dompdf->render();
  $this->dompdf->stream("laporan_masyarakat.pdf", array('Attachment' => 0));
 }
}

/* End of file Peta_maskin.php */