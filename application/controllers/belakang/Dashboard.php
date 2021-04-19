<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_maskin');
        $this->load->model('m_user');

        if (!$this->session->userdata('email')) {
            redirect('login/login');
        }
    }


    public function index()
    {
        $data = [
            'judul'                 => 'Dashboard | Halaman Dashboard Admin',
            'get_user'              => $this->m_user->get_user(),
            'list_maskin'           => $this->db->get('maskin')->result_array(),
            'get_maskin'            => $this->m_maskin->get_jumlah(),
            'get_jumlah_administrasi'            => $this->m_maskin->get_jumlah_administrasi(),
            'get_jumlah_user'       => $this->m_maskin->get_jumlah_user(),
            'get_jumlah_pesan'      => $this->m_maskin->get_jumlah_pesan(),
            'get_persebaran'        => $this->m_maskin->get_persebaran(),
            'alamat'                => $this->db->get('alamat')->row_array(),
            'isi'                   => 'belakang/dashboard'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }
}

/* End of file Dashboard.php */