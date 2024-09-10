<?php
// Class abstrak Pengguna
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
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
$mahasiswa = new Mahasiswa("Shalshabilla");
$dosen = new Dosen("Pak Abda'u");

$mahasiswa->aksesFitur(); // Output: Mahasiswa Shalshabilla mengakses fitur mahasiswa.
$dosen->aksesFitur(); // Output: Dosen Pak Abda'u mengakses fitur dosen.
?>
