<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_struktur');

        if (!$this->session->userdata('email')) {
            redirect('login/login');
        }
    }


    public function index()
    {
        $data = [
            'judul' => 'Struktur Organisasi | Halaman Admin',
            'list_struktur' => $this->db->get('struktur')->result_array(),
            'get_user' => $this->m_user->get_user(),
            'isi'   => 'belakang/struktur/list_struktur'
        ];
        $this->load->view('template_belakang/wraper', $data, FALSE);
    }

    public function tbh_struktur()
    {
        # code...
        $data = [
            'judul'         => 'Tambah Struktur Organisasi | Halaman Admin',
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/struktur/tbh_struktur'
        ];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_struktur->add_struktur();
        }
    }

    public function edit_struktur($id)
    {
        # code...
        $data = [
            'judul'         => 'Edit Struktur Organisasi | Halaman Admin',
            'get_struktur'  => $this->m_struktur->get_struktur($id),
            'get_user'      => $this->m_user->get_user(),
            'isi'           => 'belakang/struktur/edit_struktur'
        ];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template_belakang/wraper', $data, FALSE);
        } else {
            $this->m_struktur->edit_struktur();
        }
    }

    public function hapus_struktur($id)
    {
        # code...
        $this->db->delete('struktur', ['id' => $id]);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('belakang/struktur');
    }
}

/* End of file Struktur.php */