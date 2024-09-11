<?php

// Kelas Person sebagai induk
class Person {
    protected $name;

    public function __construct($name) {
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

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Override metode getRole
    public function getRole() {
        return "dosen";
    }

    // Setter dan getter untuk NIDN
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}

// Kelas Mahasiswa mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Encapsulation: atribut nim

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override metode getRole
    public function getRole() {
        return "mahasiswa";
    }

    // Setter dan getter untuk NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk mengelola pengajuan jurnal
    abstract public function manageSubmission();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $dosen;

    public function __construct($judul, Dosen $dosen) {
        parent::__construct($judul);
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

    public function __construct($judul, Mahasiswa $mahasiswa) {
        parent::__construct($judul);
        $this->mahasiswa = $mahasiswa;
    }

    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Jurnal dengan judul '" . $this->judul . "' telah diterima oleh Mahasiswa dengan NIM " . $this->mahasiswa->getNim();
    }
}

// Membuat objek Dosen
$dosen = new Dosen("Bapak Annas", "22334455");

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa("Shalshabilla", "230102043");

// Membuat objek JurnalDosen
$jurnalDosen = new JurnalDosen("Desain Interaksi Pengguna", $dosen);

// Membuat objek JurnalMahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Aplikasi Komputer", $mahasiswa);

// Menampilkan output dalam format deskripsi
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN " . $dosen->getNidn() . ".<br>";
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . ".<br>";
echo $jurnalDosen->manageSubmission() . "<br>";
echo $jurnalMahasiswa->manageSubmission() . "<br>";

?>
