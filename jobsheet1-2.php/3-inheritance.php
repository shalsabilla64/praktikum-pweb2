<?php
// Class Pengguna
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br><br>"; // Tambahkan <br> untuk merapikan hasil
    }
}

// Instansiasi objek Dosen
$dosen = new Dosen("Pak Abda'u", "Pemrograman Web 2");
$dosen->tampilkanData();
?>

