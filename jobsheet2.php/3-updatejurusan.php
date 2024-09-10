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

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

$mahasiswa3 = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");
$mahasiswa3->tampilkanData();

// Mengubah jurusan mahasiswa
$mahasiswa3->updateJurusan("Teknik Lingkungan");
echo "<br>Setelah update jurusan:<br>";
$mahasiswa3->tampilkanData();
?>


