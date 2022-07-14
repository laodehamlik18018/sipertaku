<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatanah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_datatanah');
    }
    public function index()
    {
        $data['data_tanah'] = $this->m_datatanah->tampil_datatanah();
        $this->load->view('layout/header');
        $this->load->view('datatanah/datatanah', $data);
        $this->load->view('layout/footer');
    }
    public function bersertifikat()
    {
        $this->load->view('layout/header');
        $this->load->view('datatanah/bersertifikat');
        $this->load->view('layout/footer');
    }
    public function takbersertifikat()
    {
        $this->load->view('layout/header');
        $this->load->view('datatanah/takbersertifikat');
        $this->load->view('layout/footer');
    }
    public function sengketa()
    {
        $this->load->view('layout/header');
        $this->load->view('datatanah/bersengketa');
        $this->load->view('layout/footer');
    }
    public function takbersengketa()
    {
        $this->load->view('layout/header');
        $this->load->view('datatanah/bersengketa');
        $this->load->view('layout/footer');
    }
    public function tambah_tanah()
    {
        $this->load->view('layout/header');
        $this->load->view('datatanah/tambahdata_tanah');
        $this->load->view('layout/footer');
    }
    public function tambah_aksi()
    {
        $nama = $this->input->post('nama_pemilik');
        $luastanah = $this->input->post('luas_tanah');
        $jenistanah = $this->input->post('jenis_tanah');
        $statustanah = $this->input->post('status_hak_tanah');
        $statussertifikat = $this->input->post('status_sertifikat');
        $statussengketa = $this->input->post('status_sengketa');
        $kordinat_a = $this->input->post('kordinat_a');
        $kordinat_b = $this->input->post('kordinat_b');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'nama_pemilik' => $nama,
            'luas_tanah' => $luastanah,
            'jenis_tanah' => $jenistanah,
            'status_hak_tanah' => $statustanah,
            'status_sertifikat' => $statussertifikat,
            'status_sengketa' => $statussengketa,
            'kordinat_a' => $kordinat_a,
            'kordinat_b' => $kordinat_b,
            'keterangan' => $keterangan,

        );
        $this->m_datatanah->input_data($data, 'data_tanah');

        redirect('datatanah/index');
    }
    function hapus($id)
    {
        $where = array('id_tanah' => $id);
        $this->m_datatanah->hapus($where, 'data_tanah');
        redirect('datatanah/index');
    }
    public function edit_data_tanah($id)
    {
        $where = array('id_tanah' => $id);
        $data['data_tanah'] = $this->m_datatanah->edit($where, 'data_tanah')->result();
        $this->load->view('layout/header');
        $this->load->view('datatanah/edit_data_tanah', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $id = $this->input->post('id_tanah');
        $nama = $this->input->post('nama_pemilik');
        $luastanah = $this->input->post('luas_tanah');
        $jenistanah = $this->input->post('jenis_tanah');
        $statustanah = $this->input->post('status_hak_tanah');
        $statussertifikat = $this->input->post('status_sertifikat');
        $statussengketa = $this->input->post('status_sengketa');
        $kordinat_a = $this->input->post('kordinat_a');
        $kordinat_b = $this->input->post('kordinat_b');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'nama_pemilik' => $nama,
            'luas_tanah' => $luastanah,
            'jenis_tanah' => $jenistanah,
            'status_hak_tanah' => $statustanah,
            'status_sertifikat' => $statussertifikat,
            'status_sengketa' => $statussengketa,
            'kordinat_a' => $kordinat_a,
            'kordinat_b' => $kordinat_b,
            'keterangan' => $keterangan,

        );
        $where = array(
            'id_tanah'  => $id
        );
        $this->m_datatanah->update_data($where, $data, 'data_tanah');

        redirect('datatanah/index');
    }
}
