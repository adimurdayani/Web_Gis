<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{

    public function index()
    {
        $data = [
            'judul'     => 'Halaman Struktur Organisasi | WebGis',
            'get_struktur' => $this->db->get('struktur')->row_array(),
            'get_administrasi'    => $this->db->get('p_administrasi')->row_array(),
            'get_persebaran'    => $this->db->get('p_persebaran')->row_array(),
            'get_maskin'           => $this->db->get('maskin')->result_array(),
            'alamat' => $this->db->get('alamat')->result_array(),
            'list_alamat' =>   $this->db->get('alamat')->result_array(),
            'isi'       => 'depan/profil/struktur/struktur'
        ];

        $this->load->view('template_depan/wraper', $data, FALSE);
    }
}

/* End of file Struktur.php */