<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
    }
    public function index()
    {
        $data['user'] = $this->model_user->tampil_data();
        $this->load->view('layout/header');
        $this->load->view('admin/index', $data);
        $this->load->view('layout/footer');
    }
    public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('admin/adduser');
        $this->load->view('layout/footer');
    }
    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path']  = './upload';
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
            'nama' => $nama,
            'jabatan' => $jabatan,
            'username' => $username,
            'password' => $password,
            'foto'     => $foto,

        );
        $this->model_user->input_data($data, 'user');

        redirect('datauser/index');
    }
    function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_user->hapus($where, 'user');
        redirect('datauser/index');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->model_user->edit_data($where, 'user')->result();
        $this->load->view('layout/header');
        $this->load->view('admin/edit_user', $data);
        $this->load->view('layout/footer');
    }
    public function update()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->upload->display_errors();
            } else {
                $id = $this->input->post('id');
                $foto = $this->input->post('foto');
                unlink("./upload/" . $foto);
                $data = [
                    'nama' => $this->input->post('nama'),
                    'foto' => $this->upload->data('file_name'),
                    'jabatan' => $this->input->post('jabatan'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),

                ];
                $this->model_user->update_yes($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
                redirect('datauser/index');
            }
        } else {
            $id = $this->input->post('id');
            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
            ];
            $this->model_user->update_no($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
            redirect('datauser/index');
        }
    }
}
