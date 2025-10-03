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
    
    private $dbh;
    private $stmt;

    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}
}


?>