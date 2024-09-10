<?php
// Class Mahasiswa dengan encapsulation
class Mahasiswa {
    // Atribut dengan akses private
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk inisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Getter dan Setter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }
    // Getter NIM
    public function getNIM() {
        return $this->nim;
    }
    // Getter Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    // Setter Nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
    // Setter NIM
    public function setNIM($nim) {
        return $nim->$nim;
    }
    // setter Jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
    // Tampilkan data
    public function tampilkanData() {
        echo "Nama: ". $this->getNama() . "<br>";
        echo "Nim: ". $this->getNim() . "<br>";
        echo "Jurusan: ". $this->getJurusan() . "<br>";
    }
}
  
// Instansiasi Objek
$mahasiswa1 = new Mahasiswa ("Shalshabilla", "230102043", "Komputer dan Bisnis");
$mahasiswa1->setNama("Shalshabilla");
$mahasiswa1->tampilkanData();
?>