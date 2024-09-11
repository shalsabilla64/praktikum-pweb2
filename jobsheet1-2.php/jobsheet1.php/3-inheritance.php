<?php
// Class Pengguna
class Pengguna {
    protected $nama;

    // Setter untuk atribut nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    // Setter untuk atribut mataKuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanData() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br><br>"; // Tambahkan <br> untuk merapikan hasil
    }
}

// Instansiasi objek Dosen
$dosen = new Dosen();

// Menetapkan nilai atribut menggunakan setter
$dosen->setNama("Pak Abda'u");
$dosen->setMataKuliah("Pemrograman Web 2");

// Menampilkan data dosen
$dosen->tampilkanData();
?>



