<?php
// Class abstrak Pengguna
abstract class Pengguna {
    protected $nama;

    // Setter untuk atribut nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak
    abstract public function aksesFitur();
}

// Class Mahasiswa yang mengimplementasikan metode abstrak
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Mahasiswa $this->nama mengakses fitur mahasiswa.<br>";
    }
}

// Class Dosen yang mengimplementasikan metode abstrak
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Dosen $this->nama mengakses fitur dosen.<br>";
    }
}

// Demonstrasi abstraksi
$mahasiswa = new Mahasiswa();
$mahasiswa->setNama("Shalshabilla");

$dosen = new Dosen();
$dosen->setNama("Pak Abda'u");

$mahasiswa->aksesFitur(); // Output: Mahasiswa Shalshabilla mengakses fitur mahasiswa.
$dosen->aksesFitur(); // Output: Dosen Pak Abda'u mengakses fitur dosen.
?>
