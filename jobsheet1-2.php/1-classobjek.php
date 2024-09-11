<?php
// Membuat class Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();

// Menetapkan nilai atribut secara manual
$mahasiswa->nama = "Shalshabilla";
$mahasiswa->nim = "230102043";
$mahasiswa->jurusan = "Komputer dan Bisnis";

// Menampilkan data mahasiswa
$mahasiswa->tampilkanData();
?>
