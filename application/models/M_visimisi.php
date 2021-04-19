<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_visimisi extends CI_Model
{
    public function add_visimisi()
    {
        # code...

        $judul = htmlspecialchars($this->input->post('judul', true));
        $isi = htmlspecialchars($this->input->post('isi', true));
        $penulis = htmlspecialchars($this->input->post('penulis', true));
        #proses insert data
        $this->db->set('judul', $judul);
        $this->db->set('isi', $isi);
        $this->db->set('penulis', $penulis);
        $this->db->insert('visimisi');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
        redirect('belakang/visimisi/tbh_visimisi');
    }
    public function edit_visimisi()
    {
        # code...
        $id = htmlspecialchars($this->input->post('id', true));
        $judul = htmlspecialchars($this->input->post('judul', true));
        $isi = htmlspecialchars($this->input->post('isi', true));
        $penulis = htmlspecialchars($this->input->post('penulis', true));
        #proses insert data
        $this->db->set('judul', $judul);
        $this->db->set('isi', $isi);
        $this->db->set('penulis', $penulis);
        $this->db->where('id', $id);
        $this->db->update('visimisi');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Data berhasil di edit!</div>');
        redirect('belakang/visimisi');
    }
    public function get_visimisi($id)
    {
        # code...
        return $this->db->get_where('visimisi', ['id' => $id])->row_array();
    }
}

/* End of file M_visimisi.php */