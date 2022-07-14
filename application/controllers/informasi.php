<?php
defined('BASEPATH') or exit('No direct script access allowed');

class informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_informasi');
    }
    public function index()
    {
        $data['informasi'] = $this->m_informasi->tampil_data();
        $this->load->view('layout/header');
        $this->load->view('informasi/index', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $this->load->view('layout/header');
        $this->load->view('informasi/tambah_informasi');
        $this->load->view('layout/footer');
    }
    public function tambah_aksi()
    {
        $judul_informasi = $this->input->post('judul_informasi');
        $isi_informasi = $this->input->post('isi_informasi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path']  = './upload/informasi';
            $config['allowed_types']   = 'jpg|png|gif';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {

                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil Ditambahkan</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>'
                );
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul_informasi' => $judul_informasi,
            'isi_informasi' => $isi_informasi,
            'foto'     => $foto,

        );
        $this->m_informasi->input_data($data, 'informasi');

        redirect('informasi/index');
    }
    function hapus($id)
    {
        $where = array('id_infromasi' => $id);
        $this->m_informasi->hapus($where, 'infromasi');
        redirect('informasi/index');
    }
    public function edit($id)
    {
        $where = array('id_informasi' => $id);
        $data['informasi'] = $this->m_informasi->edit_data($where, 'informasi')->result();
        $this->load->view('layout/header');
        $this->load->view('informasi/edit_informasi', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $config['upload_path'] = './upload/informasi/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id_informasi');
                $foto = $this->input->post('foto');
                unlink("./upload/informasi/" . $foto);
                $data = [
                    'judul_informasi' => $this->input->post('judul_informasi'),
                    'foto' => $this->upload->data('file_name'),
                    'isi_informasi' => $this->input->post('isi_informasi'),
                ];
                $this->m_informasi->update_yes($id, $data);
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil di Update</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>'
                );
                redirect('informasi/index');
            }
        } else {
            $id = $this->input->post('id_informasi');
            $data = [
                'judul_informasi' => $this->input->post('judul_informasi'),
                'isi_informasi' => $this->input->post('isi_informasi'),

            ];
            $this->m_informasi->update_no($id, $data);
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Data Berhasil di Update</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>'
            );
            redirect('informasi/index');
        }
    }
}
