<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk inisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        echo "nama: " . $this->nama . "<br>";
        echo "nim: " . $this->nim . "<br";
        echo "jurusan: " . $this->jurusan . "<br";
    }
}

// Menggunakan concstruct untuk membuat objek
$mahasiswa2 = new Mahasiswa("Shalshabilla", "230102043", "Komputer dan Bisnis");
$mahasiswa2->tampilkanData();
?>