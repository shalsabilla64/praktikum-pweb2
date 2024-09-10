<?php
// Class Pengguna dengan metode aksesFitur
class Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur umum.<br>";
    }
}

// Class Dosen yang mewarisi Pengguna
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur dosen.<br>";
    }
}

// Class Mahasiswa yang mewarisi Pengguna
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses fitur mahasiswa.<br>";
    }
}

// Demonstrasi polymorphism
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

$dosen->aksesFitur(); // Output: Mengakses fitur dosen.
$mahasiswa->aksesFitur(); // Output: Mengakses fitur mahasiswa.
?>
