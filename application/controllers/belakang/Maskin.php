<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maskin extends CI_Controller
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
            'judul'         => 'Data Masyarakat Miskin | Halaman Admin',
            'list_maskin'   => $this->db->get('maskin')->result_array(),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/maskin/list_maskin'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }

    public function tbh_maskin()
    {
        # code...
        $data = [
            'judul'     => 'Tambah Data Masyarakat Miskin | Halaman Admin',
            'get_user'      => $this->m_user->get_user(),
            'isi'       => 'belakang/maskin/tbh_maskin'
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_kk', 'no_kk', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
        $this->form_validation->set_rules('tanggungan', 'tanggungan', 'trim|required');
        $this->form_validation->set_rules('luas_rumah', 'Luas Rumah', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            # code...
            $this->m_maskin->add_maskin();
        }
    }

    public function edit_maskin($id)
    {
        # code...
        $data = [
            'judul'         => 'Edit Data Masyarakat Miskin | Halaman Admin',
            'get_maskin'    => $this->m_maskin->get_maskin($id),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/maskin/edit_maskin'
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('no_kk', 'no_kk', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
        $this->form_validation->set_rules('luas_rumah', 'Luas Rumah', 'trim|required');
        $this->form_validation->set_rules('tanggungan', 'tanggungan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            # code...
            $this->m_maskin->edit_maskin();
        }
    }

    public function hapus_maskin($id)
    {
        # code...
        $this->db->delete('maskin', ['id' => $id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('belakang/maskin');
    }
}

/* End of file Maskin.php */