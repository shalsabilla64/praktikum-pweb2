<?php
// Implementasi kelas dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //metode tampilkanData
    public function tampilkanDosen() {
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}

    // Membuat objek dari kelas dosen
    $dosen1 = new Dosen("Annas Setiawan Prabowo", "198711172018031001", "Konsep Basis Data");
    $dosen1->tampilkanDosen();
?>

