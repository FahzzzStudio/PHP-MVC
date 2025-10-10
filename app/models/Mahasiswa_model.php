<?php
class Mahasiswa_model{
    private $mhs = [
    [
        "nama"=>"Mahasiswa01",
        "nrp"=>"00001222"
    ],
    [
        "nama"=>"Mahasiswa02",
        "nrp"=>"01111332"
    ]
    ];
    
    // Data
    private $dbh;
    private $stmt;

    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=xiirpl1';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM data_siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMahasiswaById($id) {
        $this->stmt = $this->dbh->prepare('SELECT * FROM data_siswa WHERE id = :id');
        $this->stmt->bindParam(':id', $id);
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function tambahData($data) {
        $query = "INSERT INTO data_siswa (nis, nama, n_mtk)
            VALUES (:nis, :nama, :n_mtk)";
        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->bindParam(':nis', $data['nis']);
        $this->stmt->bindParam(':nama', $data['nama']);
        $this->stmt->bindParam(':n_mtk', $data['n_mtk']);
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }

    public function ubahDataMahasiswa($data) {
        $query = "UPDATE data_siswa SET
            nis = :nis,
            nama = :nama,
            n_mtk = :n_mtk WHERE id = :id";

        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->bindParam(':nis', $data['nis']);
        $this->stmt->bindParam(':nama', $data['nama']);
        $this->stmt->bindParam(':n_mtk', $data['n_mtk']);
        $this->stmt->bindParam(':id', $data['id']);
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }

    public function hapusDataMahasiswa($data) {
        $query = "DELETE FROM data_siswa WHERE id = :id";
        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->bindParam(':id', $id);
        $this->stmt->execute();

        return $this->stmt->rowCount();
    }
}
?>