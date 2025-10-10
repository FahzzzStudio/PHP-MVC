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

    public function getedit() {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    // public function showEdit($id) {
    //     $data['judul'] = 'Edit Data Mahasiswa';
    //     $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    //     $this->view('templates/header', $data);
    //     $this->view('mahasiswa/edit', $data);
    //     $this->view('templates/footer');
    // }

    // public function edit() {
    //     if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST)>0){
    //         Flasher::setFlash('berhasil', 'diubah', 'success');
    //         header('Location: '. BASEURL. '/mahasiswa');
    //         exit;
    //     } else {
    //         Flasher::setFlash('gagal','diubah','danger');
    //         header('Location: ' . BASEURL. '/mahasiswa');
    //         exit;
    //     }
    // }

    public function edit($id) {
        $data['judul'] = 'Edit Data Siswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data); // tampilkan halaman edit
        $this->view('templates/footer');
    }

    public function update() {
        if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
        }
        header('Location: '. BASEURL . '/mahasiswa');
        exit;
    }

}
?>