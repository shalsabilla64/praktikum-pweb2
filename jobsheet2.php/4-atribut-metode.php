<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }

    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

$mahasiswa4 = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");
$mahasiswa4->tampilkanData();

// Mengubah NIM mahasiswa
$mahasiswa4->setNim("230102042");
echo "<br>Setelah update NIM:<br>";
$mahasiswa4->tampilkanData();
?>


