<?php

// Kelas Person sebagai induk
class Person {
    protected $name;

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    // Metode yang akan dioverride oleh subclass
    public function getRole() {
        return "Person";
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Kelas Dosen mewarisi dari Person
class Dosen extends Person {
    private $nidn; // Encapsulation: atribut nidn

    // Setter untuk NIDN
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    // Override metode getRole
    public function getRole() {
        return "dosen";
    }
}

// Kelas Mahasiswa mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Encapsulation: atribut nim

    // Setter untuk NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    // Override metode getRole
    public function getRole() {
        return "mahasiswa";
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    // Setter untuk judul
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function manageSubmission();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $dosen;

    // Setter untuk Dosen
    public function setDosen(Dosen $dosen) {
        $this->dosen = $dosen;
    }

    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Jurnal dengan judul '" . $this->judul . "' telah diterima oleh Dosen dengan NIDN " . $this->dosen->getNidn();
    }
}

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    private $mahasiswa;

    // Setter untuk Mahasiswa
    public function setMahasiswa(Mahasiswa $mahasiswa) {
        $this->mahasiswa = $mahasiswa;
    }

    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Jurnal dengan judul '" . $this->judul . "' telah diterima oleh Mahasiswa dengan NIM " . $this->mahasiswa->getNim();
    }
}

// Membuat objek Dosen
$dosen = new Dosen();
$dosen->setName("Bapak Annas");
$dosen->setNidn("22334455");

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->setName("Shalshabilla");
$mahasiswa->setNim("230102043");

// Membuat objek JurnalDosen
$jurnalDosen = new JurnalDosen();
$jurnalDosen->setJudul("Desain Interaksi Pengguna");
$jurnalDosen->setDosen($dosen);

// Membuat objek JurnalMahasiswa
$jurnalMahasiswa = new JurnalMahasiswa();
$jurnalMahasiswa->setJudul("Aplikasi Komputer");
$jurnalMahasiswa->setMahasiswa($mahasiswa);

// Menampilkan output dalam format deskripsi
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN " . $dosen->getNidn() . ".<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . ".<br>";
echo $jurnalDosen->manageSubmission() . "<br>";
echo $jurnalMahasiswa->manageSubmission() . "<br>";

?>


 