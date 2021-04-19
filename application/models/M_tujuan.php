<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tujuan extends CI_Model
{
    public function add_tujuan()
    {
        # code...
        $judul = htmlspecialchars($this->input->post('judul', true));
        $isi = htmlspecialchars($this->input->post('isi', true));
        $penulis = htmlspecialchars($this->input->post('penulis', true));
        #proses insert data
        $this->db->set('judul', $judul);
        $this->db->set('isi', $isi);
        $this->db->set('penulis', $penulis);
        $this->db->insert('tujuan');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
        redirect('belakang/tujuan');
    }

    public function edit_tujuan()
    {
        # code...
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $isi = htmlspecialchars($this->input->post('isi', true));
        $penulis = htmlspecialchars($this->input->post('penulis', true));
        #proses insert data
        $this->db->where('id', $id);
        $this->db->set('judul', $judul);
        $this->db->set('isi', $isi);
        $this->db->set('penulis', $penulis);
        $this->db->where('id', $id);
        $this->db->update('tujuan');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
        redirect('belakang/tujuan/');
    }

    public function get_tujuan($id)
    {
        return $this->db->get_where('tujuan', ['id' => $id])->row_array();
    }
}

/* End of file M_tujuan.php */