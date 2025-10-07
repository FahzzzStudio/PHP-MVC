<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['judul']='Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header',$data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = 'Tambah Data Siswa';
        $this->view('templates/header', $data);
        $this->view('mahasiswa/tambah');
        $this->view('templates/footer');
    }

    public function simpan() {
        if ($this->model('Mahasiswa_model')->tambahData($_POST) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
        }
    }
}
?>