<?php
// Class Mahasiswa dengan encapsulation
class Mahasiswa {
    // Atribut dengan akses private
    private $nama;
    private $nim;
    private $jurusan;

    // Getter dan Setter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk atribut NIM
    public function getNIM() {
        return $this->nim;
    }

    public function setNIM($nim) {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk atribut Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIM: " . $this->getNIM() . "<br>";
        echo "Jurusan: " . $this->getJurusan() . "<br>";
    }
}

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa();

// Menetapkan nilai atribut menggunakan setter
$mahasiswa1->setNama("Shalshabilla");
$mahasiswa1->setNIM("230102043");
$mahasiswa1->setJurusan("Komputer dan Bisnis");

// Menampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>
