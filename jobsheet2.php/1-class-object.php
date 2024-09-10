<?php
// Membuat class Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk inisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");
$mahasiswa->tampilkanData();
?>